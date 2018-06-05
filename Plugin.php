<?php namespace OFFLINE\GDPR;

use Offline\GDPR\Components\ConsentManager;
use OFFLINE\GDPR\Models\CookieConsentSettings;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            ConsentManager::class => 'consentManager',
        ];
    }

    public function registerSettings()
    {
        return [
            'gdpr_cookie_consent' => [
                'label'       => trans('offline.gdpr::lang.settings.cookie_consent.label'),
                'description' => trans('offline.gdpr::lang.settings.cookie_consent.description'),
                'category'    => 'GDPR',
                'icon'        => 'oc-icon-check-square',
                'class'       => CookieConsentSettings::class,
                'order'       => 200,
                'keywords'    => 'gdpr',
                'permissions' => ['offline.gdpr.manage_cookie_consent'],
            ],
        ];
    }
}
