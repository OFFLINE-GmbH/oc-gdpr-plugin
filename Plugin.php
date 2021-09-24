<?php namespace OFFLINE\GDPR;

use Backend\Facades\Backend;
use OFFLINE\GDPR\Classes\Cookies\ConsentCookie;
use OFFLINE\GDPR\Components\ConsentManager;
use OFFLINE\GDPR\Components\CookieBanner;
use OFFLINE\GDPR\Components\CookieManager;
use OFFLINE\GDPR\Console\CleanUp;
use OFFLINE\GDPR\Console\ImportPresets;
use OFFLINE\GDPR\Models\CookieConsentSettings;
use OFFLINE\GDPR\Models\DataRetentionSettings;
use OFFLINE\GDPR\Models\GDPRSettings;
use OFFLINE\GDPR\Models\Log;
use System\Classes\PluginBase;
use RainLab\Translate\Models\Attribute;

class Plugin extends PluginBase
{
    const EVENT_CLEANUP_REGISTER = 'offline.gdpr::cleanup.register';

    public function register()
    {
        $this->registerConsoleCommand('gdpr.cleanup', CleanUp::class);
        $this->registerConsoleCommand('gdpr.import', ImportPresets::class);
    }

    public function registerSchedule($schedule)
    {
        $schedule->command('gdpr:cleanup')->daily();
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

    public function boot()
    {
        \Event::listen('backend.menu.extendItems', function ($manager) {
            if ((bool)GDPRSettings::get('log_enabled') !== true) {
                $manager->removeMainMenuItem('OFFLINE.GDPR', 'main-menu-item');
            }
        });
        \Event::listen('offline.gdpr::cleanup.register', function () {
            return [
                'id'     => 'offline-gdpr-logs',
                'label'  => trans('offline.gdpr::lang.plugin.name'),
                'models' => [
                    [
                        'label'   => trans('offline.gdpr::lang.log.log'),
                        'comment' => trans('offline.gdpr::lang.log.log_comment'),
                        'class'   => Log::class,
                    ],
                ],
            ];
        });
        if (class_exists(\RainLab\Translate\Models\Attribute::class)) {
            Attribute::extend(function ($model) {
                $model->addFillable([
                    'locale',
                    'model_id',
                    'model_type',
                    'attribute_data',
                ]);
                $model->timestamps = false;
            });
        }
    }

    public function registerSettings()
    {
        return [
            'gdpr_info'           => [
                'label'       => trans('offline.gdpr::lang.settings.info.label'),
                'description' => trans('offline.gdpr::lang.settings.info.description'),
                'category'    => 'GDPR and ePrivacy',
                'icon'        => 'icon-info-circle',
                'url'         => Backend::url('offline/gdpr/info'),
                'order'       => 200,
                'keywords'    => 'gdpr',
                'permissions' => ['offline.gdpr.manage_cookie_info'],
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
            'gdpr_settings' => [
                'label' => trans('offline.gdpr::lang.settings.general.label'),
                'description' => trans('offline.gdpr::lang.settings.general.description'),
                'category' => 'GDPR and ePrivacy',
                'icon' => 'oc-icon-gear',
                'class' => GDPRSettings::class,
                'order' => 210,
                'keywords' => 'gdpr',
                'permissions' => ['offline.gdpr.manage_logs'],
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
            /**
             *  @deprecated since version 2.1. Add this menu item back using the backend.menu.extendItems event.
             */
            // 'gdpr_cookie_consent' => [
            //     'label'       => trans('offline.gdpr::lang.settings.cookie_consent.label'),
            //     'description' => trans('offline.gdpr::lang.settings.cookie_consent.description'),
            //     'category'    => 'GDPR and ePrivacy',
            //     'icon'        => 'oc-icon-check-square',
            //     'class'       => CookieConsentSettings::class,
            //     'order'       => 200,
            //     'keywords'    => 'gdpr',
            //     'permissions' => ['offline.gdpr.manage_cookie_consent'],
            // ],
        ];
    }
}
