<?php

namespace OFFLINE\GDPR\Classes\Cookies;

use Illuminate\Support\Facades\Cookie;
use OFFLINE\GDPR\Models\CookieGroup;
use Session;
use Symfony\Component\HttpFoundation\Cookie as CookieFoundation;

class ConsentCookie
{
    const MINUTES_PER_YEAR = 24 * 60 * 365;

    public function set($value)
    {
        // Required cookies cannot be disabled and are therefore always added
        // to the consent cookie by default.
        $value = $this->appendRequiredCookies($value);

        // Keep the decision for the next request in the session since the cookie
        // will not be available everywhere until the page is reloaded again.
        Session::flash('gdpr_cookie_consent', $value);

        return Cookie::queue(
            'gdpr_cookie_consent',
            $value,
            self::MINUTES_PER_YEAR,           // expire
            '/',                              // path
            null,                             // domain
            $this->isHttps(),                 // secure
            true,                             // httpOnly
            false,                            // raw
            CookieFoundation::SAMESITE_STRICT // sameSite
        );
    }

    public function get()
    {
        return Session::get('gdpr_cookie_consent', Cookie::get('gdpr_cookie_consent'));
    }

    public function hasDeclined()
    {
        return Cookie::get('gdpr_cookie_consent') === false;
    }

    public function isUndecided()
    {
        return Cookie::get('gdpr_cookie_consent') === null;
    }

    public function isDecided()
    {
        return ! $this->isUndecided();
    }

    protected function isHttps()
    {
        return request()->isSecure();
    }

    public function registerPageView()
    {
        Session::put('gdpr_first_page_view', time());
    }

    public function isFirstPageView(): bool
    {
        return Session::get('gdpr_first_page_view') === null && Cookie::get('gdpr_cookie_consent') === null;
    }

    public function isAllowed($cookieCode, $level = 0)
    {
        $consent = $this->get();
        if (count($consent) < 1) {
            return false;
        }

        return array_get($consent, $cookieCode, -1) >= $level;
    }

    public function allowedCookieLevel($cookieCode, $level = 0)
    {
        $consent = $this->get();
        if (count($consent) < 1) {
            return -1;
        }

        return array_get($consent, $cookieCode, -1);
    }

    protected function appendRequiredCookies($value)
    {
        return CookieGroup::with('cookies')
                          ->where('required', true)
                          ->get()
                          ->map->cookies
                          ->flatten()
                          ->pluck('default_level', 'code')
                          ->merge($value);
    }
}