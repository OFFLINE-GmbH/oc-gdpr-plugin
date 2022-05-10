<?php

namespace OFFLINE\GDPR\Classes\Cookies;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;
use OFFLINE\GDPR\Models\CookieGroup;
use OFFLINE\GDPR\Models\GDPRSettings;
use OFFLINE\GDPR\Models\Log;
use Session;

class ConsentCookie
{
    const SAME_SITE = 'lax';
    const MINUTES_PER_YEAR = 24 * 60 * 365;
    const MINUTES_PER_MONTH = 24 * 60 * 30;

    public $expiry = self::MINUTES_PER_YEAR;

    public function set($value)
    {
        // Log the user's decision.
        if (GDPRSettings::get('log_enabled')) {
            Log::updateOrCreate(
                ['session_id' => Session::getId()],
                ['decision' => $value === false ? Log::DECLINED : Log::ACCEPTED, 'useragent' => Request::userAgent()]
            );
        }

        // Required cookies cannot be disabled and are therefore always added
        // to the consent cookie by default.
        $value = $this->appendRequiredCookies($value);

        // Keep the decision for the next request in the session since the cookie
        // will not be available everywhere until the page is reloaded again.
        Session::flash('gdpr_cookie_consent', $value);

        return Cookie::queue(
            'gdpr_cookie_consent',
            $value->toJson(),
            $this->expiry,          // expire
            '/',                    // path
            null,                   // domain
            $this->isHttps(),       // secure
            true,                   // httpOnly
            false,                  // raw
            self::SAME_SITE         // sameSite
        );
    }

    public function get()
    {
        $value = Session::get('gdpr_cookie_consent', Cookie::get('gdpr_cookie_consent'));
        if (is_string($value)) {
            $value = @json_decode($value, true);
        }

        return collect($value);
    }

    public function withExpiry($expiry)
    {
        $this->expiry = $expiry * self::MINUTES_PER_MONTH;

        Session::put('gdpr_session_expiry', $expiry);

        return $this;
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

    public function isAllowed($cookieCode, $level = 0)
    {
        $consent = $this->get();
        if (is_countable($consent) && count($consent) < 1) {
            return false;
        }

        return array_get($consent, $cookieCode, -1) >= $level;
    }

    public function allowedCookieLevel($cookieCode, $level = 0)
    {
        $consent = $this->get();
        if (is_countable($consent) && count($consent) < 1) {
            return -1;
        }

        return array_get($consent, $cookieCode, -1);
    }

    protected function appendRequiredCookies($userSelection)
    {
        // Wrap the collection again using the helper to extend support
        // for old Laravel 5.1 installations where the collection methods
        // behave differently (especially when using ->merge())
        $cookies = collect(CookieGroup::with('cookies')
                                      ->where('required', true)
                                      ->get()
                                      ->flatMap(function ($item) {
                                          return $item->cookies;
                                      }));

        $required = $cookies->pluck('default_level', 'code');

        return $userSelection === false ? $required : $required->merge($userSelection);
    }
}
