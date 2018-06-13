<?php namespace OFFLINE\GDPR\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use OFFLINE\GDPR\Classes\Cookies\ConsentCookie;
use OFFLINE\GDPR\Models\CookieGroup;
use Symfony\Component\HttpFoundation\Cookie as CookieFoundation;

class CookieManager extends ComponentBase
{
    public $cookieGroups;
    public $consentCookie;
    public $consent;

    public function componentDetails()
    {
        return [
            'name'        => 'Cookie Manager',
            'description' => trans('offline.gdpr::lang.cookie_manager.description'),
        ];
    }

    public function defineProperties()
    {
        return [
            'include_css' => [
                'title'       => trans('offline.gdpr::lang.cookie_banner.include_css.title'),
                'description' => trans('offline.gdpr::lang.cookie_banner.include_css.description'),
                'default'     => 1,
                'type'        => 'checkbox',
            ],
        ];
    }

    public function init()
    {
        $this->consentCookie = new ConsentCookie();

        $cookies = post('cookies');
        if ( ! $cookies) {
            return;
        }

        $enabled = collect($cookies)->filter(function ($item) {
            return $item['enabled'] ?? false;
        })->map(function ($item) {
            return (int)($item['level'] ?? 0);
        })->toArray();

        $this->consentCookie->set($enabled);
    }

    public function onRun()
    {
        if ($this->property('include_css')) {
            $this->addCss('assets/cookieManager/manager.css');
        }
        $this->cookieGroups = $this->getCookieGroups();
        $this->consent      = $this->consentCookie->get();
    }

    protected function getCookieGroups()
    {
        return CookieGroup::with('cookies')->orderBy('sort_order', 'ASC')->get();
    }
}
