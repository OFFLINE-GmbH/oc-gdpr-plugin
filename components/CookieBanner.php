<?php namespace OFFLINE\GDPR\Components;

use Carbon\Carbon;
use Cms\Classes\ComponentBase;
use Cms\Classes\ThemeManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use OFFLINE\GDPR\Models\CookieGroup;

class CookieBanner extends ComponentBase
{
    public $hide = false;
    public $cookieGroups;
    public $hardReload = false;
    public $updatePartial = '';
    public $updateSelector = '';

    const MINUTES_PER_YEAR = 24 * 60 * 365;

    public function componentDetails()
    {
        return [
            'name'        => 'Cookie Bannner',
            'description' => trans('offline.gdpr::lang.cookie_banner.description'),
        ];
    }

    public function defineProperties()
    {
        return [
            'include_css'     => [
                'title'       => trans('offline.gdpr::lang.cookie_banner.include_css.title'),
                'description' => trans('offline.gdpr::lang.cookie_banner.include_css.description'),
                'default'     => 1,
                'type'        => 'checkbox',
            ],
            'hard_reload'     => [
                'title'       => trans('offline.gdpr::lang.cookie_banner.hard_reload.title'),
                'description' => trans('offline.gdpr::lang.cookie_banner.hard_reload.description'),
                'default'     => 0,
                'type'        => 'checkbox',
            ],
            'update_partial'  => [
                'title'       => trans('offline.gdpr::lang.cookie_banner.update_partial.title'),
                'description' => trans('offline.gdpr::lang.cookie_banner.update_partial.description'),
                'type'        => 'text',
            ],
            'update_selector' => [
                'title'       => trans('offline.gdpr::lang.cookie_banner.update_selector.title'),
                'description' => trans('offline.gdpr::lang.cookie_banner.update_selector.description'),
                'default'     => '#gdpr-reload',
                'type'        => 'text',
            ],
        ];
    }

    public function init()
    {
        $this->hardReload     = $this->property('hard_reload', false);
        $this->updatePartial  = $this->property('update_partial', '');
        $this->updateSelector = $this->property('update_selector', '#gdpr-reload');
    }

    public function onRun()
    {
        // We only show te banner on the first page view of every user.
        if ( ! $this->isFirstPageView()) {
            $this->hide = true;

            if ($this->isUndecided()) {
                $this->setDefaultConsent();
            }

            return;
        }

        $this->cookieGroups = $this->getCookieGroups();

        if ($this->property('include_css')) {
            $this->addCss('assets/cookieBanner/banner.css');
        }

        $this->registerPageView();
    }

    public function onSubmit()
    {
        $accepted = post('cookie', []);
        $groups   = CookieGroup::with('cookies')->whereIn('id', $accepted)->get();

        $cookies = $groups->map->cookies->flatten()->filter(function ($item) {
            return $item->initial_status;
        })->pluck('max_level', 'code')->toArray();

        $this->setCookie($cookies);
    }

    public function onDecline()
    {
        $this->setCookie(false);
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

        return $this->setCookie($cookies);
    }

    protected function registerPageView()
    {
        Session::put('gdpr_first_page_view', time());
    }

    protected function isFirstPageView(): bool
    {
        return Session::get('gdpr_first_page_view') === null && Cookie::get('gdpr_cookie_consent') === null;
    }

    protected function hasDeclined(): bool
    {
        return Cookie::get('gdpr_cookie_consent') === false;
    }

    protected function isUndecided(): bool
    {
        return Cookie::get('gdpr_cookie_consent') === null;
    }

    protected function setCookie($value)
    {
        // Keep the decision for the next request in the session since the cookie
        // will not be available everywhere until the page is reloaded again.
        Session::flash('gdpr_cookie_consent', $value);

        return Cookie::queue('gdpr_cookie_consent', $value, self::MINUTES_PER_YEAR, null, null, $this->isHttps(), true);
    }

    protected function isHttps()
    {
        return request()->isSecure();
    }
}
