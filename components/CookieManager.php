<?php namespace OFFLINE\GDPR\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Session;
use OFFLINE\GDPR\Classes\Cookies\ConsentCookie;
use OFFLINE\GDPR\Models\CookieGroup;

class CookieManager extends ComponentBase
{
    public $cookieGroups;
    public $consentCookie;
    public $consent;
    public $includeJs;
    public $consentExpiry;

    public function componentDetails()
    {
        return [
            'name'        => 'Cookie Manager',
            'description' => 'offline.gdpr::lang.cookie_manager.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'include_css' => [
                'title'       => 'offline.gdpr::lang.cookie_banner.include_css.title',
                'description' => 'offline.gdpr::lang.cookie_banner.include_css.description',
                'default'     => 1,
                'type'        => 'checkbox',
            ],
            'include_js'  => [
                'title'       => 'offline.gdpr::lang.cookie_banner.include_js.title',
                'description' => 'offline.gdpr::lang.cookie_banner.include_js.description',
                'default'     => 1,
                'type'        => 'checkbox',
            ],
        ];
    }

    public function init()
    {
        $this->setPreferences();
    }

    public function onRun()
    {
        $this->includeJs = $this->property('include_js', true);
        if ($this->property('include_css')) {
            $this->addCss('assets/cookieManager/manager.css');
        }

        $this->consentExpiry = Session::get('gdpr_session_expiry', 12);
        $this->cookieGroups  = $this->getCookieGroups();
        $this->consent       = $this->consentCookie->get();
    }

    public function onUpdate()
    {
        $this->setPreferences();
    }

    protected function getCookieGroups()
    {
        return CookieGroup::with('cookies')->orderBy('sort_order', 'ASC')->get();
    }

    protected function setPreferences()
    {
        $this->consentCookie = new ConsentCookie();

        if ( ! post('_gdpr_submit')) {
            return;
        }

        $enabled = collect(post('cookies'))->filter(function ($item) {
            return $item['enabled'] ?? false;
        })->map(function ($item) {
            return (int)($item['level'] ?? 0);
        })->toArray();

        $this->consentCookie->withExpiry(post('consent_expiry', 12))->set($enabled);
    }
}
