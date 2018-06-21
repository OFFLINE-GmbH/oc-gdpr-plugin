<?php return [
    'plugin'          => [
        'name'        => 'GDPR und ePrivacy',
        'description' => 'Mache deine Website GDPR und ePrivacy konform',
    ],
    'common'          => [
        'enabled'       => 'Aktiviert',
        'disabled'      => 'Deaktiviert',
        'sorted'        => 'Reihenfolge aktualisiert',
        'save_settings' => 'Einstellungen speichern',
    ],
    'cookie_banner'   => [
        'description'         => 'Zeigt ein Cookie-Banner an',
        'message'             => 'Wir verwenden Cookies um Inhalte zu personalisieren und unsere Besucherstatistik zu führen. Bitte entscheiden Sie sich, ob Sie unsere Cookies akzeptieren möchten.',
        'advanced_settings'   => 'Erweiterte Einstellungen',
        'decline'             => 'Ablehnen',
        'accept'              => 'Cookies akzeptieren',
        'include_css'         => [
            'title'       => 'Standard CSS einbinden',
            'description' => 'Lädt die mitgelieferte CSS-Datei',
        ],
        'hard_reload'         => [
            'title'       => 'Hard-Reload nach Akzeptieren',
            'description' => 'Seite nach Akzeptieren komplett neu laden um alle JS-Scripts korrekt einzubinden',
        ],
        'update_partial'      => [
            'title'       => 'Partial für Soft-Reload',
            'description' => 'Dieses Partial wird nach dem Akzeptieren automatisch neu geladen.',
        ],
        'update_selector'     => [
            'title'       => 'CSS-Selector für Soft-Reload',
            'description' => 'Das Partial wird nach dem Akzeptieren in diesem Element neu geladen.',
        ],
        'cookie_manager_page' => [
            'title'       => 'Seite für erweiterte Einstellungen',
            'description' => 'Auf dieser Seite muss die cookieManager Komponente platziert werden',
            'empty'       => 'Ohne erweiterte Einstellungen',
        ],
        'ignore_behaviour'    => [
            'title'       => 'Ignoierverhalten',
            'description' => 'Diese Aktion wird ausgeführt, wenn der Benutzer das Banner ignoriert',
            'nothing'     => 'Banner erneut anzeigen',
            'opt-in'      => 'Opt-in (Standardcookies werden aktiviert)',
            'opt-out'     => 'Opt-out (Keine Cookies werden aktiviert)',
        ],
    ],
    'cookie_manager'  => [
        'description' => 'Zeigt eine Übersicht aller Cookies mit Bearbeitungsmöglichkeit an',
    ],
    'consent_manager' => [
        'description'    => 'Bindet den Klaro! Constent Manager ein',
        'include_assets' => [
            'title'       => 'Abhängigkeiten laden',
            'description' => 'Binde alle benötigten JS-Abhängigeiten automatisch ein',
        ],
        'style_prefix'   => [
            'title'       => 'CSS-Prefix',
            'description' => 'Verwende diese CSS-Klasse im Klaro! HTML-Markup (entfernt Standardstyles)',
        ],
    ],
    'settings'        => [
        'cookies'        => [
            'label'       => 'Cookies and Modules',
            'description' => 'Cookies and Modules Management',
        ],
        'cookie_consent' => [
            'label'                     => 'Cookie Consent',
            'description'               => 'Einstellungen zum Klaro! Manager',
            'cookie_expires_after_days' => [
                'label'   => 'Lebensdauer der Consent Cookies in Tagen',
                'comment' => 'Die vom Besucher getroffenen Einstellungen werden nach dieser Anzahl Tage gelöscht.',
            ],
            'privacy_policy'            => [
                'label'   => 'Datenschutzerklärung',
                'comment' => 'Relativer oder absoluter Link zur Datenschutzerklärung',
            ],
            'default_application_state' => [
                'label'   => 'Standard Zustand der einzelnen Applikationen',
                'comment' => 'Ob alle aufgelisteten Applikationen standardmässig aktiv oder inaktiv sind',
            ],
            'must_consent'              => [
                'label'   => 'Zustimmung erzwingen',
                'comment' => 'Zeige den Consent Manager direkt nach dem ersten Seitenaufruf an um eine Zustimmung zu erzwingen',
            ],
            'lang'                      => [
                'label'   => 'Zweistelliger Sprachcode',
                'comment' => 'Alle verfügbaren Sprachen findest du in der Klaro! Dokumentation',
            ],
            'tabs'                      => [
                'translations' => 'Übersetzungen',
                'apps'         => 'Apps',
                'general'      => 'Allgemein',
            ],
            'translations'              => [
                'repeater' => [
                    'code' => [
                        'label' => 'Zweistelliger Sprachcode',
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
                        'comment' => 'Ein einfacher und kurzer Name (z. B. google-analytics)',
                    ],
                    'application_state' => [
                        'label'   => 'Standardmässig aktiv',
                        'comment' => 'Ob diese App standardmässig aktiviert sein soll. Diese Option überschreibt die globale Einstellung.',
                    ],
                    'required'          => [
                        'label'   => 'Zustimmung erzwungen',
                        'comment' => 'Die Zustimmung für diese App kann vom Kunden nicht deaktiviert werden',
                    ],
                    'opt_out'           => [
                        'label'   => 'Opt-Out',
                        'comment' => 'Die Scripts dieser App werden beim ersten Seitenaufruf geladen. Der Kunde muss die Verwendung explizit verweigern.',
                    ],
                    'only_once'         => [
                        'label'   => 'App nur einmal initialisieren',
                        'comment' => 'Die Scripts dieser App nur einmal laden, auch wenn der Besucher die Zustimmung mehrfach de- und wieder aktiviert.',
                    ],
                    'title'             => [
                        'label'   => 'Titel',
                        'comment' => 'Wird dem Besucher angezeigt (z. B. Google Analytics)',
                    ],
                    'purposes'          => [
                        'label'   => 'Anwendungszwecke',
                        'comment' => 'Diese Bezeichnungen müssen in den Übersetzungen übersetzt werden (z. B. analytics, user-tracking)',
                    ],
                    'cookies'           => [
                        'label'   => 'Cookies dieser App',
                        'comment' => 'String oder RegEx des Cookie Namens. Diese Cookies werden automatisch gelöscht, wenn der Besucher der Verwendung dieser App nicht zustimmt (z. B. /^_ga_.*$/ oder custom_tracker_cookie)',
                    ],
                    'callback'          => [
                        'label'   => 'Callback-Funktion',
                        'comment' => 'Diese JavaScript Funktion wird immer dann ausgeführt, wenn diese App vom Kunden zugelassen wird.<br /><pre><small>function (consent, app) { // ... }</small></pre>',
                    ],
                ],
            ],
        ],
        'data_retention' => [
            'label'             => 'Datenaufbewahrung',
            'description'       => 'Einstellungen zur Datenaufbewahrung',
            'enabled'           => [
                'label'   => 'Automatische Datenlöschung aktiv',
                'comment' => 'Lösche Daten autoamtisch nachdem sie abgelaufen sind',
            ],
            'default_keep_days' => [
                'label'   => 'Automatische Datenlöschung nach Anzahl Tagen',
                'comment' => 'Gilt für alle Plugins solange nicht anders definiert',
            ],
            'keep_days'         => [
                'label' => 'Automatische Datenlöschung nach Anzahl Tagen',
            ],
        ],
    ],
    'cookie_group'    => [
        'fields' => [
            'name'                   => 'Gruppenname',
            'initial_status'         => 'Initialzustand',
            'initial_status_comment' => 'Diese Cookiegruppe ist standardmässig aktiv',
            'required'               => 'Required for the Website to Function and Work',
            'required_comment'       => 'The Cookies and/or Modules in this group are needed for the website to work properly and can therefore not be disabled by the user.',
            'slug'                   => 'Slug',
            'default_level'          => 'Dieses Level ist für den Besucher voreingestellt',
        ],
        'tabs'   => [
            'description' => 'Beschreibung',
            'cookies'     => 'Cookies',
        ],
    ],
    'cookie'          => [
        'fields' => [
            'name_owner'                  => 'Owner',
            'name_owner_comment'          => 'Owner Name of the Service e.g. Google Analytics',
            'code'                        => 'Code',
            'code_comment'                => 'This is generated for the plugin to work (you dont need to touch this)',
            'intial_status'               => 'Dieses Cookie ist standardmässig aktiviert',
            'levels'                      => 'Cookie-Levels',
            'purpose'                     => 'Zweck',
            'purpose_comment'             => 'Under ePrivacy Law (Article 4, para 11 and article 13, para 1, C and para 2, F), you need to Describe the Purpose of the Use, Processing and any Notifications e.g. \'These cookies are used from AddThis social sharing widget in order to make sure you see the updated count when you share a page\'.',
            'contact_details_dpo'         => 'Kontaktdaten des «Data Controller»',
            'contact_details_dpo_comment' => 'Under ePrivacy Law (Article 13, Para 1, A and Recital 42), you have to give the DPO Contact Address e.g. Cloudflare, Inc. 101 Townsend St. San Francisco, CA 94107. Attention: Data Protection Officer, privacyquestions@cloudflare.com (please note the email address is optional)',
            'contact_links_dpo'           => 'Links zum «Data Controller»',
            'contact_links_dpo_comment'   => 'Under ePrivacy Law (Article 13, para 2, B, C and D), you need to give links for \'rights to complain to Supervisory authority and to access correct data policy\' this means linking to their Privacy Policy, Terms and Conditions, Cookie Privacy and Opt-Out Pages if they have them.',
            'contact_links_dpo_prompt'    => 'Neuen Link hinzufügen',
            'contact_links'               => [
                'name' => 'Anzeigetext',
                'href' => 'Linkziel (absolute URL)',
            ],
            'cookie_levels'               => [
                'purpose_prompt'   => 'Add Granular Purpose Levels',
                'purpose_label'    => 'Granular Purpose Levels',
                'section1_label'   => 'Helpful Tip for Granular Purpose Levels',
                'section1_comment' => 'Under ePrivacy Law (Recital 32 and Article 29 working party guidance nov 2017), Granular Opt-In for several Processes. This means having an off setting, the having a basic setting, then having a more advanced setting and so on up to a full setting. An example of this could be Google Analytics where we have an Off Setting, then a basic Tracking Setting, then a basic Tracking Setting plus Plugins, then finally a full setting with everything. The number of levels depends on what you are adding.',
                'section2_label'   => 'Helpful Tip for Item Details',
                'section2_comment' => 'You can list as many item details as you want, if this is for a cookie make sure you list all the Cookie Identification Names, for example Google Analytics can have 8 or more different ones different ones. Also make sure you have equal number of Name (Cookie Identification), Duration/Expiry and Type fields. To find the list of Website Cookies in Google Chrome go to Dev Tools > Application > Cookies. You can also use the website: https://cookiepedia.co.uk/ to look-up Cookies.',
                'name'             => 'Name (Cookie Identification)',
                'name_comment'     => 'The Name of the of the Cookie Prefix code e.g. \'_ga\'',
                'provider'         => 'Anbieter',
                'provider_comment' => 'Gemäss ePrivacy Recht muss die Website oder Domain des Cookies angegebenw erden. (please exclude the https://, www and / at the end)',
                'purpose'          => 'Purpose',
                'purpose_comment'  => 'Describe the Purpose of the Use at each granular level, Article 5 requires that consent is requested in a granular manner for \'specified, explicit\' purposes. (please write a SINGLE Paragraph)',
                'expiry'           => 'Ablauf/Lebensdauer',
                'expiry_comment'   => 'Gemäss ePrivacy Recht muss angegeben werden, wie lange das Cookie im Browser gespeichert bleibt. e.g. SESSION, 3 monate, 2 jahre.',
                'type'             => 'Typ',
                'type_comment'     => 'Under ePrivacy Law, you need to state what type of cookie or module is, to make things easier we have made a drop-down menu',
            ],
        ],
        'tabs'   => [
            'contact' => 'Kontaktdaten',
            'levels'  => 'Levels verwalten',
            'levels2' => 'Anbieter',
            'levels3' => 'Manage Item Details',
        ],
    ],
    'permissions'     => [
        'manage_cookie_consent' => 'Verwalte Cookie Consent Einstellungen',
        'manage_data_retention' => 'Verwalte Datenaufbewahrung',
        'manage_cookie_groups'  => 'Kann Cookie-Gruppen verwalten',
    ],
];