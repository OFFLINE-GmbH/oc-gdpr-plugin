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
    public $ignoreBehaviour = 'nothing';
    /**
     * @var ConsentCookie
     */
    public $consentCookie;

    public function componentDetails()
    {
        return [
            'name'        => 'Cookie Banner',
            'description' => 'offline.gdpr::lang.cookie_banner.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'include_css'         => [
                'title'       => 'offline.gdpr::lang.cookie_banner.include_css.title',
                'description' => 'offline.gdpr::lang.cookie_banner.include_css.description',
                'default'     => 1,
                'type'        => 'checkbox',
            ],
            'hard_reload'         => [
                'title'       => 'offline.gdpr::lang.cookie_banner.hard_reload.title',
                'description' => 'offline.gdpr::lang.cookie_banner.hard_reload.description',
                'default'     => 0,
                'type'        => 'checkbox',
            ],
            'update_partial'      => [
                'title'       => 'offline.gdpr::lang.cookie_banner.update_partial.title',
                'description' => 'offline.gdpr::lang.cookie_banner.update_partial.description',
                'type'        => 'string',
            ],
            'update_selector'     => [
                'title'       => 'offline.gdpr::lang.cookie_banner.update_selector.title',
                'description' => 'offline.gdpr::lang.cookie_banner.update_selector.description',
                'default'     => '#gdpr-reload',
                'type'        => 'string',
            ],
            'cookie_manager_page' => [
                'title'       => 'offline.gdpr::lang.cookie_banner.cookie_manager_page.title',
                'description' => 'offline.gdpr::lang.cookie_banner.cookie_manager_page.description',
                'type'        => 'dropdown',
            ],
            'ignore_behaviour'    => [
                'title'       => 'offline.gdpr::lang.cookie_banner.ignore_behaviour.title',
                'description' => 'offline.gdpr::lang.cookie_banner.ignore_behaviour.description',
                'type'        => 'dropdown',
            ],
        ];
    }

    public function init()
    {
        $this->consentCookie     = new ConsentCookie();
        $this->ignoreBehaviour   = $this->property('ignore_behaviour', 'nothing');
        $this->hardReload        = $this->property('hard_reload', false);
        $this->updatePartial     = $this->property('update_partial', '');
        $this->updateSelector    = $this->property('update_selector', '#gdpr-reload');
        $this->cookieManagerPage = $this->property('cookie_manager_page');
    }

    public function onRun()
    {
        if ( ! $this->consentCookie->isFirstPageView()) {
            return $this->handleSecondPageView();
        }

        if ($this->property('include_css')) {
            $this->addCss('assets/cookieBanner/banner.css');
        }

        $this->cookieGroups = $this->getCookieGroups();

        if ($this->ignoreBehaviour !== 'nothing') {
            // To hide the banner on subsequent page views we have
            // to keep track of this first page view (if the
            // ignoreBehaviour is not set to "nothing").
            $this->consentCookie->registerPageView();
        }
    }

    protected function handleSecondPageView()
    {
        $this->hide = true;

        if ($this->consentCookie->isDecided()) {
            return;
        }

        if ($this->ignoreBehaviour === 'opt-in') {
            $this->setDefaultConsent();
        } else {
            $this->onDecline();
        }
    }

    public function onSubmit()
    {
        $accepted = post('cookie', []);
        $groups   = CookieGroup::with('cookies')->whereIn('id', $accepted)->get();

        $cookies = $groups->flatMap(function ($group) {
            return $group->cookies;
        })->filter(function ($item) {
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
        $cookies = $this->getCookieGroups()->flatMap(function ($group) {
            return $group->cookies;
        })->filter(function ($item) {
            return $item->initial_status;
        })->pluck('max_level', 'code')->toArray();

        return $this->consentCookie->set($cookies);
    }

    public function getCookie_manager_pageOptions()
    {
        return [null => '-- ' . trans('offline.gdpr::lang.cookie_banner.cookie_manager_page.empty')]
            + Page::getNameList();
    }

    public function getIgnore_behaviourOptions()
    {
        return [
            'nothing' => 'offline.gdpr::lang.cookie_banner.ignore_behaviour.nothing',
            'opt-in'  => 'offline.gdpr::lang.cookie_banner.ignore_behaviour.opt-in',
            'opt-out' => 'offline.gdpr::lang.cookie_banner.ignore_behaviour.opt-out',
        ];
    }
}
