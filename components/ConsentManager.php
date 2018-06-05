<?php namespace Offline\GDPR\Components;

use Cms\Classes\ComponentBase;
use OFFLINE\GDPR\Models\CookieConsentSettings;

class ConsentManager extends ComponentBase
{
    public $settings;

    public $defaults = [
        'cookie_expires_after_days' => 365,
        'privacy_policy'            => '/privacy',
        'default_application_state' => true,
        'must_consent'              => false,
        'lang'                      => 'en',
        'translations'              => [],
    ];

    public function componentDetails()
    {
        return [
            'name'        => 'Klaro! Consent Manager',
            'description' => trans('offline.gdpr::lang.consent_manager.description'),
        ];
    }

    public function defineProperties()
    {
        return [
            'include_assets' => [
                'title'       => trans('offline.gdpr::lang.consent_manager.include_assets.title'),
                'description' => trans('offline.gdpr::lang.consent_manager.include_assets.description'),
                'default'     => 1,
                'type'        => 'checkbox',
            ],
            'style_prefix' => [
                'title'       => trans('offline.gdpr::lang.consent_manager.style_prefix.title'),
                'description' => trans('offline.gdpr::lang.consent_manager.style_prefix.description'),
                'type'        => 'string',
            ],
        ];
    }

    public function init()
    {
        if ($this->property('include_assets', true)) {
            $this->addJs('assets/klaro/klaro.js', [
                'defer'             => true,
                'data-style-prefix' => $this->property('style_prefix', false),
            ]);
        }

        $settings = optional(
            CookieConsentSettings::where('item', 'offline_gdpr_cookie_consent_settings')->first()
        )->value;

        $this->settings = array_merge($this->defaults, $settings);
    }

    /**
     * If the given cookie String starts with a / we return
     * the value as JS regex, otherwise wrap the string in quotes.
     *
     * @return string
     */
    public function handleRegEx($input)
    {
        if (starts_with($input, '/')) {
            return $input;
        }

        return sprintf("'%s'", $input);
    }
}
