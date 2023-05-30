<?php namespace OFFLINE\GDPR\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Redirect;
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
            'deferred' => [
                'title'       => 'offline.gdpr::lang.cookie_banner.deferred.title',
                'description' => 'offline.gdpr::lang.cookie_banner.deferred.description',
                'default'     => 0,
                'type'        => 'checkbox',
            ]
        ];
    }

    public function init()
    {
        $this->consentCookie = new ConsentCookie();

        // Handle the form submission of the cookie manage.r If the _gdpr_submit
        // field is not included in the request, don't do anything here.
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

    public function setup()
    {
        $this->includeJs = $this->property('include_js', true);
        if ($this->property('include_css')) {
            $this->addCss('assets/cookieManager/manager.css');
        }

        $this->consentExpiry = Session::get('gdpr_session_expiry', 12);
        $this->cookieGroups  = $this->getCookieGroups();
        $this->consent       = $this->consentCookie->get();
    }

    public function onRun()
    {
        // The CookieManager form has been submitted. Return a proper redirect
        // here so the user receives the newly set cookie for further requests.
        if (post('_gdpr_submit')) {
            return Redirect::back();
        }

        // Defer the setup of the cookie manager until later. This comes in
        // handy if you want to display the cookie manager in a popup via
        // the onRenderCookieManager method.
        if ((bool)$this->property('deferred')) {
            return;
        }

        $this->setup();
    }

    public function onRenderCookieManager()
    {
        $this->setup();

        return ['manager' => $this->renderPartial($this->alias . '::default')];
    }

    public function getCookieGroups()
    {
        if ($this->cookieGroups) {
            return $this->cookieGroups;
        }

        return $this->cookieGroups = CookieGroup::with('cookies')->orderBy('sort_order', 'ASC')->get();
    }
}
