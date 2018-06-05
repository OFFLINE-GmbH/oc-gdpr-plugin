<?php return [
    'plugin' => [
        'name' => 'GDPR',
        'description' => 'Make your website GDPR compliant',
    ],
    'consent_manager' => [
        'description' => 'Includes the Klaro! Constent Manager',
        'include_assets' => [
            'title' => 'Include assets',
            'description' => 'Includes all needed JS files automatically',
        ],
        'style_prefix' => [
            'title' => 'CSS prefix',
            'description' => 'Use this css class in the Klaro! HTML markup (removes default styles)',
        ],
    ],
    'settings' => [
        'cookie_consent' => [
            'label' => 'Cookie Consent',
            'description' => 'Configure Klaro! Manager',
            'cookie_expires_after_days' => [
                'label' => 'Cookie lifetime in days',
                'comment' => 'The user\'s settings are stored for this many days.',
            ],
            'privacy_policy' => [
                'label' => 'Privacy policy',
                'comment' => 'Relative or absolute link to your privacy policy',
            ],
            'default_application_state' => [
                'label' => 'Default application state',
                'comment' => 'Enable consent for all applications by default',
            ],
            'must_consent' => [
                'label' => 'Must consent',
                'comment' => 'Display the consent manager directly on the first page view to force a desicion by the user',
            ],
            'lang' => [
                'label' => 'Language code',
                'comment' => 'You\'ll find all available codes in the Klaro! documentation',
            ],
            'tabs' => [
                'translations' => 'Translations',
                'apps' => 'Apps',
                'general' => 'General',
            ],
            'translations' => [
                'repeater' => [
                    'code' => [
                        'label' => 'Language code',
                    ],
                    'json' => [
                        'label' => 'JSON',
                    ],
                ],
            ],
            'apps' => [
                'repeater' => [
                    'name' => [
                        'label' => 'Name',
                        'comment' => 'A simple and short name for this app (ex. google-analytics)',
                    ],
                    'application_state' => [
                        'label' => 'Enabled by default',
                        'comment' => 'Enable this app by default. This overwrites the global setting',
                    ],
                    'required' => [
                        'label' => 'Consent is required',
                        'comment' => 'This app cannot be disabled',
                    ],
                    'opt_out' => [
                        'label' => 'Opt-out',
                        'comment' => 'The scripts of this app are loaded on first page view without the visitor giving consent.',
                    ],
                    'only_once' => [
                        'label' => 'Load script only once',
                        'comment' => 'The scripts of this app are loaded only once even if the visitor re-enables it multiple times.',
                    ],
                    'title' => [
                        'label' => 'Title',
                        'comment' => 'Display name (ex. Google Analytics)',
                    ],
                    'purposes' => [
                        'label' => 'Purposes',
                        'comment' => 'These purposes have to be translated in the translations section. (ex. analytics, user-tracking)',
                    ],
                    'cookies' => [
                        'label' => 'Cookies of this app',
                        'comment' => 'String or RegEx of cookie names. These cookies are automatically removed if the user disables this app. (ex. /^_ga_.*$/ or custom_tracker_cookie)',
                    ],
                    'callback' => [
                        'label' => 'Callback function',
                        'comment' => 'This JavaScript function is called whenever a user enables this app.<br /><pre><small>function (consent, app) { // ... }</small></pre>',
                    ],
                ],
            ],
        ],
        'data_retention' => [
            'label' => 'Data retention',
            'description' => 'Configure your data retention policies',
            'enabled' => [
                'label' => 'Cleanup enabled',
                'comment' => 'Delete old data automatically after it has expired',
            ],
            'default_keep_days' => [
                'label' => 'Delete data after days',
                'comment' => 'Valid for all registered plugins if nothing else is specified below',
            ],
            'keep_days' => [
                'label' => 'Delete data after days',
            ],
        ],
    ],
    'permissions' => [
        'manage_cookie_consent' => 'Can manage cookie consent settings',
        'manage_data_retention' => 'Can manage data retention policies',
    ],
];