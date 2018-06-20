<?php return [
    'plugin'          => [
        'name'        => 'GDPR',
        'description' => 'Make your website GDPR compliant',
    ],
    'common'          => [
        'enabled'       => 'Enabled',
        'disabled'      => 'Disabled',
        'sorted'        => 'Order updated successfully',
        'save_settings' => 'Save settings',
    ],
    'cookie_banner'   => [
        'description'         => 'Displays a cookie banner',
        'message'             => 'We use cookies to personalize content and to analyze our traffic. Please decide if you are willing to accept cookies from our website.',
        'advanced_settings'   => 'Advanced Settings',
        'decline'             => 'Decline',
        'accept'              => 'Accept Cookies',
        'include_css'         => [
            'title'       => 'Include CSS',
            'description' => 'Include default styles for this component',
        ],
        'hard_reload'         => [
            'title'       => 'Hard reload after the user accepted',
            'description' => 'Do a hard reload after the user made a decision to refresh all your dependencies files',
        ],
        'update_partial'      => [
            'title'       => 'Partial for soft reload',
            'description' => 'This partial will be loaded when the user accepts.',
        ],
        'update_selector'     => [
            'title'       => 'CSS selector for soft reload',
            'description' => 'The partial will be loaded into this element.',
        ],
        'cookie_manager_page' => [
            'title'       => 'Page for advanced settings',
            'description' => 'Place the cookieManager component on this page',
            'empty'       => 'Without advanced settings',
        ],
        'ignore_behaviour'    => [
            'title'       => 'Ignore behaviour',
            'description' => 'Use this action if the user ignores the banner and makes no decision',
            'nothing'     => 'Show banner again',
            'opt-in'      => 'Opt-in (enable default cookies)',
            'opt-out'     => 'Opt-out (don\'t enable any cookies)',
        ],
    ],
    'cookie_manager'  => [
        'description' => 'Displays an overview and edit form for all the cookies you have defined in the backend settings',
    ],
    'consent_manager' => [
        'description'    => 'Includes the Klaro! Consent Manager',
        'include_assets' => [
            'title'       => 'Include assets',
            'description' => 'Includes all needed JS files automatically',
        ],
        'style_prefix'   => [
            'title'       => 'CSS prefix',
            'description' => 'Use this css class in the Klaro! HTML markup (removes default styles)',
        ],
    ],
    'settings'        => [
        'cookies'        => [
            'label'       => 'Cookies',
            'description' => 'Cookie management',
        ],
        'cookie_consent' => [
            'label'                     => 'Cookie Consent',
            'description'               => 'Configure Klaro! Manager',
            'cookie_expires_after_days' => [
                'label'   => 'Cookie lifetime in days',
                'comment' => 'The user\'s settings are stored for this many days.',
            ],
            'privacy_policy'            => [
                'label'   => 'Privacy policy',
                'comment' => 'Relative or absolute link to your privacy policy',
            ],
            'default_application_state' => [
                'label'   => 'Default application state',
                'comment' => 'Enable consent for all applications by default',
            ],
            'must_consent'              => [
                'label'   => 'Must consent',
                'comment' => 'Display the consent manager directly on the first page view to force a decision by the user',
            ],
            'lang'                      => [
                'label'   => 'Language code',
                'comment' => 'You\'ll find all available codes in the Klaro! documentation',
            ],
            'tabs'                      => [
                'translations' => 'Translations',
                'apps'         => 'Apps',
                'general'      => 'General',
            ],
            'translations'              => [
                'repeater' => [
                    'code' => [
                        'label' => 'Language code',
                    ],
                    'json' => [
                        'label' => 'JSON',
                    ],
                ],
            ],
            'apps'                      => [
                'repeater' => [
                    'name'              => [
                        'label'   => 'Name',
                        'comment' => 'A simple and short name for this app (ex. google-analytics)',
                    ],
                    'application_state' => [
                        'label'   => 'Enabled by default',
                        'comment' => 'Enable this app by default. This overwrites the global setting',
                    ],
                    'required'          => [
                        'label'   => 'Consent is required',
                        'comment' => 'This app cannot be disabled',
                    ],
                    'opt_out'           => [
                        'label'   => 'Opt-out',
                        'comment' => 'The scripts of this app are loaded on first page view without the visitor giving consent.',
                    ],
                    'only_once'         => [
                        'label'   => 'Load script only once',
                        'comment' => 'The scripts of this app are loaded only once even if the visitor re-enables it multiple times.',
                    ],
                    'title'             => [
                        'label'   => 'Title',
                        'comment' => 'Display name (ex. Google Analytics)',
                    ],
                    'purposes'          => [
                        'label'   => 'Purposes',
                        'comment' => 'These purposes have to be translated in the translations section. (ex. analytics, user-tracking)',
                    ],
                    'cookies'           => [
                        'label'   => 'Cookies of this app',
                        'comment' => 'String or RegEx of cookie names. These cookies are automatically removed if the user disables this app. (ex. /^_ga_.*$/ or custom_tracker_cookie)',
                    ],
                    'callback'          => [
                        'label'   => 'Callback function',
                        'comment' => 'This JavaScript function is called whenever a user enables this app.<br /><pre><small>function (consent, app) { // ... }</small></pre>',
                    ],
                ],
            ],
        ],
        'data_retention' => [
            'label'             => 'Data retention',
            'description'       => 'Configure your data retention policies',
            'enabled'           => [
                'label'   => 'Cleanup enabled',
                'comment' => 'Delete old data automatically after it has expired',
            ],
            'default_keep_days' => [
                'label'   => 'Delete data after days',
                'comment' => 'Valid for all registered plugins if nothing else is specified below',
            ],
            'keep_days'         => [
                'label' => 'Delete data after days',
            ],
        ],
    ],
    'cookie_group'    => [
        'fields' => [
            'name'                   => 'Group name',
            'initial_status'         => 'Initial status',
            'initial_status_comment' => 'This cookie group is enabled by default',
            'required'               => 'Required',
            'required_comment'       => 'The cookies in this group are needed for the website to work properly and can therefore not be disabled by the user',
            'slug'                   => 'Slug',
            'default_level'          => 'This level is preselected for the user',
        ],
        'tabs'   => [
            'description' => 'Description',
            'cookies'     => 'Cookies',
        ],
    ],
    'cookie'          => [
        'fields' => [
            'name_owner'      => 'Name/Owner',
            'code'            => 'Code',
            'intial_status'   => 'This cookie is enabled by default',
            'levels'          => 'Cookie levels',
            'purpose'         => 'Purpose',
            'purpose_comment' => 'Describe the Purpose of the Use, Processing and any Notifications e.g. Determines if the user\'s navigation should be registered in a certain statistical placeholder',
            'contact_details_dpo'         => 'Contact Details of Data Controller',
            'contact_details_dpo_comment' => 'Under ePrivacy Law, you have to give the DPO Contact Address of the cookie e.g. Cloudflare, Inc. 101 Townsend St. San Francisco, CA 94107. Attention: Data Protection Officer, privacyquestions@cloudflare.com',
            'contact_links_dpo'         => 'Contact Links of Data Controller',
            'contact_links_dpo_comment' => 'Under ePrivacy Law, you need to give a link directly to the webpage of the DPO of the cookie e.g. Link to their Terms, Privacy, Cookie Privacy page etc.',
            'contact_links' => [
                'name' => 'Label',
                'href' => 'Link target (absolute URL)',
            ]
        ],
        'tabs'   => [
            'contact' => 'Contact information'
        ],
    ],
    'permissions'     => [
        'manage_cookie_consent' => 'Can manage cookie consent settings',
        'manage_data_retention' => 'Can manage data retention policies',
        'manage_cookie_groups'  => 'Can manage cookie groups',
    ],
];