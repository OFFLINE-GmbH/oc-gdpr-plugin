<?php return [
    'plugin'          => [
        'name'        => 'GDPR',
        'description' => 'Mache deine Website GDPR konform',
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
            'label'       => 'Cookies',
            'description' => 'Cookie-Verwaltung',
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
            'required'               => 'Zustimmung erzwungen',
            'required_comment'       => 'Die Cookies dieser Gruppe werden für die Funktionalität der Website benötigt und können nicht deaktiviert werden',
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
            'name_owner'                  => 'Name/Eigentümer',
            'code'                        => 'Code',
            'intial_status'               => 'Dieses Cookie ist standardmässig aktiviert',
            'levels'                      => 'Cookie-Levels',
            'purpose'                     => 'Zweck',
            'purpose_comment'             => 'Beschreibe die Verwendung, die Verarbeitung und allfällige Benachrichtigungen. Beispiel: «Bestimmt ob der Seitenaufruf des Besuchers zu Statistikzwecken aufgezeichnet wird»',
            'contact_details_dpo'         => 'Kontaktdaten des «Data Controller»',
            'contact_details_dpo_comment' => 'Gemäss ePrivacy Recht müssen Kontaktdaten des Data Controller für ein Cookie bekanntgegeben werden. Beispiel: Cloudflare, Inc. 101 Townsend St. San Francisco, CA 94107. Attention: Data Protection Officer, privacyquestions@cloudflare.com',
            'contact_links_dpo'         => 'Links zum «Data Controller»',
            'contact_links_dpo_comment' => 'Gemäss ePrivacy Recht müssen Links zur Website des Data Controller für ein Cookie erstellt werden. Beispiel: Link zur Website, AGBs, Datenschutzerklärung, etc.',
            'contact_links' => [
                'name' => 'Anzeigetext',
                'href' => 'Linkziel (absolute URL)',
            ]
        ],
        'tabs'   => [
            'contact' => 'Kontaktdaten',
            'levels' => 'Levels verwalten',
        ],
    ],
    'permissions'     => [
        'manage_cookie_consent' => 'Verwalte Cookie Consent Einstellungen',
        'manage_data_retention' => 'Verwalte Datenaufbewahrung',
        'manage_cookie_groups'  => 'Kann Cookie-Gruppen verwalten',
    ],
];