<?php
return [
    "common" => [
        "contact_details" => "Contact details",
        "disabled" => "Disabled",
        "enabled" => "Enabled",
        "links" => "Links",
        "save_settings" => "Save settings",
        "sorted" => "Order updated successfully"
    ],
    "consent_manager" => [
        "description" => "Includes the Klaro! Consent Manager",
        "include_assets" => [
            "description" => "Includes all needed JS files automatically",
            "title" => "Include assets"
        ],
        "style_prefix" => [
            "description" => "Use this css class in the Klaro! HTML markup (removes default styles)",
            "title" => "CSS prefix"
        ]
    ],
    "cookie" => [
        "fields" => [
            "code" => "Code",
            "code_comment" => "This is generated for the plugin to work (you don't need to touch this)",
            "contact_details_dpo" => "Contact Details of Data Controller",
            "contact_details_dpo_comment" => "Under ePrivacy Law (Article 13, Para 1, A and Recital 42), you have to give the DPO Contact Address e.g. Cloudflare, Inc. 101 Townsend St. San Francisco, CA 94107. Attention: Data Protection Officer, privacyquestions@cloudflare.com (please note the email address is optional)",
            "contact_links" => ["href" => "Link Target (absolute URL)", "name" => "Anchor Text"],
            "contact_links_dpo" => "Contact Links of Data Controller",
            "contact_links_dpo_comment" => "Under ePrivacy Law (Article 13, para 2, B, C and D), you need to give links for 'rights to complain to Supervisory authority and to access correct data policy' this means linking to their Privacy Policy, Terms and Conditions, Cookie Privacy and Opt-Out Pages if they have them.",
            "contact_links_dpo_prompt" => "Add new link",
            "cookie_levels" => [
                "expiry" => "Duration/Expiry",
                "expiry_comment" => "Under ePrivacy Law, you need to state how long it will be used in the user browser e.g. SESSION, 3 months, 2 years.",
                "identification" => "Name (Cookie Identification)",
                "identification_comment" => "The Name of the of the Cookie Prefix code e.g. '_ga'",
                "name" => "Name",
                "provider" => "Provider",
                "provider_comment" => "Under ePrivacy Law, you need to state the website domain name. (exclude the https://, www and / at the end)",
                "purpose" => "Purpose",
                "purpose_comment" => "Describe the Purpose of the Use at each granular level in a single paragraph. Article 5 requires that consent is requested in a granular manner for 'specified, explicit' purposes.",
                "purpose_label" => "Granular Purpose Levels",
                "purpose_prompt" => "Add Granular Purpose Levels",
                "section1_comment" => "Under ePrivacy Law (Recital 32 and Article 29 working party guidance nov 2017), Use a Granular Opt-In process with our manage levels feature. This means having an off setting, then having a basic setting, then having a more advanced setting and so on up to a full setting. An example of this could be Google Analytics where we have an Off Setting, then a basic Tracking Setting, then a basic Tracking Setting plus Plugins, then finally a full setting with everything. The number of levels depends on what you are adding.",
                "section1_label" => "Helpful Tip for Granular Purpose Levels",
                "section2_comment" => "You can list as many item details as you want, if this is for a cookie make sure you list all the Cookie Identification Names, for example Google Analytics can have 8 or more different ones different ones. Also make sure you have equal number of Name (Cookie Identification), Duration/Expiry and Type fields. To find the list of Website Cookies in Google Chrome go to Dev Tools > Application > Cookies. You can also use the website: https://cookiepedia.co.uk/ to look-up Cookies.",
                "section2_label" => "Helpful Tip for Item Details",
                "type" => "Type",
                "type_comment" => "Under ePrivacy Law, you need to state what type of cookie or module is, to make things easier we have made a drop-down menu"
            ],
            "initial_status" => "",
            "intial_status" => "This cookie is enabled by default",
            "item_details" => "Item details",
            "levels" => "Cookie levels",
            "name_owner" => "Owner",
            "name_owner_comment" => "Owner Name of the Service e.g. Google Analytics",
            "name_owner_comments" => "",
            "purpose" => "Purpose",
            "purpose_comment" => "Under ePrivacy Law (Article 4, para 11 and article 13, para 1, C and para 2, F), you need to Describe the Purpose of the Use, Processing and any Notifications e.g. 'These cookies are used from AddThis social sharing widget in order to make sure you see the updated count when you share a page'."
        ],
        "tabs" => [
            "contact" => "Contact information",
            "item_details" => "Manage Item Details",
            "levels" => "Manage Levels",
            "provider" => "Provider"
        ]
    ],
    "cookie_banner" => [
        "accept" => "Accept",
        "advanced_settings" => "Advanced Settings",
        "cookie_manager_page" => [
            "description" => "Place the cookieManager component on this page",
            "empty" => "Without advanced settings",
            "title" => "Page for advanced settings"
        ],
        "decline" => "Decline",
        "description" => "Displays a cookie banner",
        "include_css" => [
            "description" => "Include default styles for this component",
            "title" => "Include CSS"
        ],
        "include_js" => [
            "description" => "Include default scripts for this component",
            "title" => "Include JS"
        ],
        "message" => "We use cookies to personalize content and to analyze our traffic. Please decide if you are willing to accept cookies from our website.",
        "update_partial" => [
            "description" => "This partial will be loaded when the user accepts.",
            "title" => "Partial for soft reload"
        ],
        "update_selector" => [
            "description" => "The partial will be loaded into this element.",
            "title" => "CSS selector for soft reload"
        ]
    ],
    "cookie_group" => [
        "fields" => [
            "default_level" => "This level is preselected for the user",
            "initial_status" => "Have turned on at Start-up",
            "initial_status_comment" => "This will set the item to be enabled at Start-up, please note ePrivacy requires many items to be turned off at default",
            "name" => "Group name",
            "required" => "Required for the Website to Function and Work",
            "required_comment" => "The Cookies and/or Modules in this group are needed for the website to work properly and can therefore not be disabled by the user.",
            "slug" => "Slug"
        ],
        "tabs" => ["cookies" => "Cookies", "description" => "Description"]
    ],
    "cookie_manager" => [
        "description" => "Displays an overview and edit form for all the cookies you have defined in the backend settings",
        "expiry" => [
            "3" => "Ask again in 3 months",
            "6" => "Ask again in 6 months",
            "12" => "Ask again in 1 year",
            "24" => "Ask again in 2 years",
            "36" => "Ask again in 3 years"
        ]
    ],
    "permissions" => [
        "manage_cookie_consent" => "Can manage cookie consent settings",
        "manage_cookie_groups" => "Can manage cookie groups",
        "manage_data_retention" => "Can manage data retention policies"
    ],
    "plugin" => [
        "description" => "Make your website GDPR and ePrivacy compliant",
        "name" => "GDPR and ePrivacy"
    ],
    "settings" => [
        "cookie_consent" => [
            "apps" => [
                "repeater" => [
                    "application_state" => [
                        "comment" => "Enable this app by default. This overwrites the global setting",
                        "label" => "Enabled by default"
                    ],
                    "callback" => [
                        "comment" => "This JavaScript function is called whenever a user enables this app.<br /><pre><small>function (consent, app) { // ... }</small></pre>",
                        "label" => "Callback function"
                    ],
                    "cookies" => [
                        "comment" => "String or RegEx of cookie names. These cookies are automatically removed if the user disables this app. (ex. /^_ga_.*\$/ or custom_tracker_cookie)",
                        "label" => "Cookies of this app"
                    ],
                    "name" => [
                        "comment" => "A simple and short name for this app (ex. google-analytics)",
                        "label" => "Name"
                    ],
                    "only_once" => [
                        "comment" => "The scripts of this app are loaded only once even if the visitor re-enables it multiple times.",
                        "label" => "Load script only once"
                    ],
                    "opt_out" => [
                        "comment" => "The scripts of this app are loaded on first page view without the visitor giving consent.",
                        "label" => "Opt-out"
                    ],
                    "purposes" => [
                        "comment" => "These purposes have to be translated in the translations section. (ex. analytics, user-tracking)",
                        "label" => "Purposes"
                    ],
                    "required" => ["comment" => "This app cannot be disabled", "label" => "Consent is required"],
                    "title" => ["comment" => "Display name (ex. Google Analytics)", "label" => "Title"]
                ]
            ],
            "cookie_expires_after_days" => [
                "comment" => "The user's settings are stored for this many days.",
                "label" => "Cookie lifetime in days"
            ],
            "default_application_state" => [
                "comment" => "Enable consent for all applications by default",
                "label" => "Default application state"
            ],
            "description" => "Configure Klaro! Manager",
            "label" => "Cookie Consent",
            "lang" => [
                "comment" => "You'll find all available codes in the Klaro! documentation",
                "label" => "Language code"
            ],
            "must_consent" => [
                "comment" => "Display the consent manager directly on the first page view to force a decision by the user",
                "label" => "Must consent"
            ],
            "privacy_policy" => [
                "comment" => "Relative or absolute link to your privacy policy",
                "label" => "Privacy policy"
            ],
            "tabs" => ["apps" => "Apps", "general" => "General", "translations" => "Translations"],
            "translations" => [
                "repeater" => ["code" => ["label" => "Language code"], "json" => ["label" => "JSON"]]
            ]
        ],
        "cookies" => [
            "description" => "Cookies and Modules Management",
            "label" => "Cookies and Modules"
        ],
        "data_retention" => [
            "default_keep_days" => [
                "comment" => "Valid for all registered plugins if nothing else is specified below",
                "label" => "Delete data after days"
            ],
            "description" => "Configure your data retention policies",
            "enabled" => [
                "comment" => "Delete old data automatically after it has expired",
                "label" => "Cleanup enabled"
            ],
            "keep_days" => ["label" => "Delete data after days"],
            "label" => "Data Retention"
        ],
        "info" => [
            "bannerlaws_title" => "Banner Laws Relating to each Country Location",
            "cookieconsent_title" => "Cookie Consent User Guide",
            "cookiesmodulessetup_title" => "Cookies and Modules Setup Example",
            "cookiesmodulesuserguide_title" => "Cookies and Modules User Guide",
            "dataretention_title" => "Data Retention User Guide",
            "description" => "Information and Help to Setup",
            "dpolinks_title" => "Contact Links for DPO of Most Common Cookies",
            "index_title" => "Welcome to OctoberCMS GDPR and ePrivacy Plugin",
            "label" => "Info and Help",
            "overallinfo_title" => "Information about GDPR and ePrivacy"
        ]
    ]
];
