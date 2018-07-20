<?php namespace OFFLINE\GDPR;

use Backend\Facades\Backend;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use OFFLINE\GDPR\Classes\Cookies\ConsentCookie;
use OFFLINE\GDPR\Components\ConsentManager;
use OFFLINE\GDPR\Components\CookieBanner;
use OFFLINE\GDPR\Components\CookieManager;
use OFFLINE\GDPR\Console\CleanUp;
use OFFLINE\GDPR\Models\CookieConsentSettings;
use OFFLINE\GDPR\Models\DataRetentionSettings;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    const EVENT_CLEANUP_REGISTER = 'offline.gdpr::cleanup.register';

    public function boot()
    {
        $this->registerConsoleCommand('gdpr.cleanup', CleanUp::class);
    }

    public function registerSchedule($schedule)
    {
        $schedule->call('gdpr:cleanup')->daily();
    }

    public function registerComponents()
    {
        return [
            ConsentManager::class => 'consentManager',
            CookieManager::class  => 'cookieManager',
            CookieBanner::class   => 'cookieBanner',
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'gdprCookieAllowed'      => function ($code, $level = 0) {
                    return (new ConsentCookie())->isAllowed($code, $level);
                },
                'gdprAllowedCookieLevel' => function ($code) {
                    return (new ConsentCookie())->allowedCookieLevel($code);
                },
                'gdprIsUndecided' => function () {
                    return (new ConsentCookie())->isUndecided();
                },
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'gdpr_cookie_consent' => [
                'label'       => trans('offline.gdpr::lang.settings.cookie_consent.label'),
                'description' => trans('offline.gdpr::lang.settings.cookie_consent.description'),
                'category'    => 'GDPR and ePrivacy',
                'icon'        => 'oc-icon-check-square',
                'class'       => CookieConsentSettings::class,
                'order'       => 200,
                'keywords'    => 'gdpr',
                'permissions' => ['offline.gdpr.manage_cookie_consent'],
            ],
            'gdpr_cookies'        => [
                'label'       => trans('offline.gdpr::lang.settings.cookies.label'),
                'description' => trans('offline.gdpr::lang.settings.cookies.description'),
                'category'    => 'GDPR and ePrivacy',
                'icon'        => 'oc-icon-list',
                'url'         => Backend::url('offline/gdpr/cookiegroups'),
                'order'       => 210,
                'keywords'    => 'gdpr',
                'permissions' => ['offline.gdpr.manage_cookie_groups'],
            ],
            'gdpr_data_retention' => [
                'label'       => trans('offline.gdpr::lang.settings.data_retention.label'),
                'description' => trans('offline.gdpr::lang.settings.data_retention.description'),
                'category'    => 'GDPR and ePrivacy',
                'icon'        => 'oc-icon-trash',
                'class'       => DataRetentionSettings::class,
                'order'       => 220,
                'keywords'    => 'gdpr',
                'permissions' => ['offline.gdpr.manage_data_retention'],
            ],
            'gdpr_info'        => [
                'label'       => trans('offline.gdpr::lang.settings.info.label'),
                'description' => trans('offline.gdpr::lang.settings.info.description'),
                'category'    => 'GDPR and ePrivacy',
                'icon'        => 'icon-info-circle',
                'url'         => Backend::url('offline/gdpr/info'),
                'order'       => 230,
                'keywords'    => 'gdpr',
                'permissions' => ['offline.gdpr.manage_cookie_info'],
            ],			
        ];
    }

}