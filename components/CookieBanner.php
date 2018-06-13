<?php namespace OFFLINE\GDPR\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use OFFLINE\GDPR\Classes\Cookies\ConsentCookie;
use OFFLINE\GDPR\Models\CookieGroup;

class CookieBanner extends ComponentBase
{
    public $hide = false;
    public $cookieGroups;
    public $hardReload = false;
    public $updatePartial = '';
    public $updateSelector = '';
    public $cookieManagerPage;
    /**
     * @var ConsentCookie
     */
    public $consentCookie;

    public function componentDetails()
    {
        return [
            'name'        => 'Cookie Banner',
            'description' => trans('offline.gdpr::lang.cookie_banner.description'),
        ];
    }

    public function defineProperties()
    {
        return [
            'include_css'         => [
                'title'       => trans('offline.gdpr::lang.cookie_banner.include_css.title'),
                'description' => trans('offline.gdpr::lang.cookie_banner.include_css.description'),
                'default'     => 1,
                'type'        => 'checkbox',
            ],
            'hard_reload'         => [
                'title'       => trans('offline.gdpr::lang.cookie_banner.hard_reload.title'),
                'description' => trans('offline.gdpr::lang.cookie_banner.hard_reload.description'),
                'default'     => 0,
                'type'        => 'checkbox',
            ],
            'update_partial'      => [
                'title'       => trans('offline.gdpr::lang.cookie_banner.update_partial.title'),
                'description' => trans('offline.gdpr::lang.cookie_banner.update_partial.description'),
                'type'        => 'text',
            ],
            'update_selector'     => [
                'title'       => trans('offline.gdpr::lang.cookie_banner.update_selector.title'),
                'description' => trans('offline.gdpr::lang.cookie_banner.update_selector.description'),
                'default'     => '#gdpr-reload',
                'type'        => 'text',
            ],
            'cookie_manager_page' => [
                'title'       => trans('offline.gdpr::lang.cookie_banner.cookie_manager_page.title'),
                'description' => trans('offline.gdpr::lang.cookie_banner.cookie_manager_page.description'),
                'type'        => 'dropdown',
            ],
        ];
    }

    public function init()
    {
        $this->consentCookie     = new ConsentCookie();
        $this->hardReload        = $this->property('hard_reload', false);
        $this->updatePartial     = $this->property('update_partial', '');
        $this->updateSelector    = $this->property('update_selector', '#gdpr-reload');
        $this->cookieManagerPage = $this->property('cookie_manager_page');
    }

    public function onRun()
    {
        // We only show the banner on the first page view of every user.
        if ( ! $this->consentCookie->isFirstPageView()) {
            $this->hide = true;

            if ($this->consentCookie->isUndecided()) {
                $this->setDefaultConsent();
            }

            return;
        }

        $this->cookieGroups = $this->getCookieGroups();

        if ($this->property('include_css')) {
            $this->addCss('assets/cookieBanner/banner.css');
        }

        $this->consentCookie->registerPageView();
    }

    public function onSubmit()
    {
        $accepted = post('cookie', []);
        $groups   = CookieGroup::with('cookies')->whereIn('id', $accepted)->get();

        $cookies = $groups->map->cookies->flatten()->filter(function ($item) {
            return $item->initial_status;
        })->pluck('max_level', 'code')->toArray();

        $this->consentCookie->set($cookies);
    }

    public function onDecline()
    {
        $this->consentCookie->set(false);
    }

    public function onRefresh()
    {
        return [
            $this->updateSelector => $this->renderPartial($this->updatePartial),
        ];
    }

    protected function getCookieGroups()
    {
        return CookieGroup::with('cookies')->orderBy('sort_order', 'ASC')->get();
    }

    protected function setDefaultConsent()
    {
        $cookies = $this->getCookieGroups()->map->cookies->flatten()->filter(function ($item) {
            return $item->initial_status;
        })->pluck('max_level', 'code')->toArray();

        return $this->consentCookie->set($cookies);
    }

    public function getCookie_manager_pageOptions()
    {
        return [null => '-- ' . trans('offline.gdpr::lang.cookie_banner.cookie_manager_page.empty')]
            + Page::getNameList();
    }
}
