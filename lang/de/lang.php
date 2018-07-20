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
        'accept'              => 'Akzeptieren',
        'include_css'         => [
            'title'       => 'Standard CSS einbinden',
            'description' => 'Lädt die mitgelieferte CSS-Datei',
        ],
        'include_js'          => [
            'title'       => 'Standard JS einbinden',
            'description' => 'Lädt die mitgelieferte JS-Datei',
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
    ],
    'cookie_manager'  => [
        'description' => 'Zeigt eine Übersicht aller Cookies mit Bearbeitungsmöglichkeit an',
        'expiry'      => [
            3  => 'In 3 Monaten erneut nachfragen',
            6  => 'In 6 Monaten erneut nachfragen',
            12 => 'In 1 Jahr erneut nachfragen',
            24 => 'In 2 Jahren erneut nachfragen',
            36 => 'In 3 Jahren erneut nachfragen',
        ],
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
            'label'       => 'Cookies und Module',
            'description' => 'Cookies und Modul-Management',
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
                'comment' => 'Lösche Daten automatisch nachdem sie abgelaufen sind',
            ],
            'default_keep_days' => [
                'label'   => 'Automatische Datenlöschung nach Anzahl Tagen',
                'comment' => 'Gilt für alle Plugins solange nicht anders definiert',
            ],
            'keep_days'         => [
                'label' => 'Automatische Datenlöschung nach Anzahl Tagen',
            ],
        ],
        'info'           => [
            'label'                         => 'Info und Hilfe',
            'description'                   => 'Informationen und Hilfe zur Einrichtung',
            'bannerlaws_title'              => 'Bannerrichtlinien für bestimmte Länder',
            'cookieconsent_title'           => 'Cookie-Zustimmung',
            'cookiesmodulessetup_title'     => 'Einrichtungsbeispiel zu Cookies und Modulen',
            'cookiesmodulesuserguide_title' => 'Anleitung zu Cookies und Modulen',
            'dataretention_title'           => 'Anleitung zur Datenlöschung',
            'dpolinks_title'                => 'Kontaktlinks für DPOs und meistgenutzte Cookies',
            'overallinfo_title'             => 'Informationen über GDPR und ePrivacy',
            'index_title'                   => 'Willkommen zum OctoberCMS GDPR und ePrivacy Plugin',
        ],
    ],
    'cookie_group'    => [
        'fields' => [
            'name'                   => 'Gruppenname',
            'initial_status'         => 'Initialzustand',
            'initial_status_comment' => 'Diese Cookiegruppe ist standardmässig aktiv',
            'required'               => 'Benötigt damit die Website korrekt funktioniert',
            'required_comment'       => 'Die Cookies oder Module dieser Gruppe werden benötigt, damit die Website korrekt funktioniert. Aus diesem Grund können Sie vom Besucher nicht deaktiviert werden.',
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
            'name_owner'                  => 'Eigentümer',
            'name_owner_comment'          => 'Name des Eigentümers des Dienstes z. B. Google Analytics',
            'code'                        => 'Code',
            'code_comment'                => 'Für die Verwendung im Frontend (must du nicht anpassen)',
            'intial_status'               => 'Dieses Cookie ist standardmässig aktiviert',
            'levels'                      => 'Cookie-Levels',
            'item_details'                => 'Detailangaben',
            'purpose'                     => 'Zweck',
            'purpose_comment'             => 'Gemäss ePrivacy Recht (Artikel 4, §11 und Artikel 13, §1, C und §2, F), müssen der Anwendungszweck, die Verarbeitung und allfällige Benachrichtigungen beschrieben werden z. B. \'Diese Cookies werden für das AddThis social sharing widget verwendet um die Anzahl Shares korrekt anzuzeigen\'.',
            'contact_details_dpo'         => 'Kontaktdaten des «Data Controller»',
            'contact_details_dpo_comment' => 'Gemäss ePrivacy Recht (Artikel 13, §1, A und Präambel 42), müssen die Kontaktdaten des DPO bekanntgegeben werden, z. B. Cloudflare, Inc. 101 Townsend St. San Francisco, CA 94107. Data Protection Officer, privacyquestions@cloudflare.com (Die Angabe einer E-Mail-Adresse ist optional)',
            'contact_links_dpo'           => 'Links zum «Data Controller»',
            'contact_links_dpo_comment'   => 'Gemäss ePrivacy Recht (Artikel 13, §2, B, C und D), müssen ‒ sofern vorhanden ‒ Links zu Datenschutzerklärungen, Nutzungsbedungungen und Opt-Out Seiten bekanntgegeben werden.',
            'contact_links_dpo_prompt'    => 'Neuen Link hinzufügen',
            'contact_links'               => [
                'name' => 'Anzeigetext',
                'href' => 'Linkziel (absolute URL)',
            ],
            'cookie_levels'               => [
                'purpose_prompt'         => 'Abstufung hinzufügen',
                'purpose_label'          => 'Abstufungen',
                'section1_label'         => 'Tipps zu den Abstufungen',
                'section1_comment'       => 'Gemäss ePrivacy Recht (Präambel 32 und Artikel 29) muss ein granularer Opt-In angeboten werden. Dies bedeutet, dass einzelne Abstufungen für das Tracking mit einem Cookie angeboten werden müssen. Zum Beispiel kann für Google Analytics "kein Tracking" angeboten werden, "einfaches Tracking" bei dem wenige Details gesammelt werden oder "vollständies Tracking" bei dem personenbezogene Daten und alle Details erfasst werden. Die Anzahl definierter Levels hängt vom verwendeten Service ab.',
                'section2_label'         => 'Tipps zu den Detailangaben',
                'section2_comment'       => 'Du kannst so viele Detailangaben machen wie du willst. Im Falle eines Cookies musst du alle Cookie Identifikationen eintragen. Für Google Analytics handelt es sich beispielsweise um bis zu acht oder mehr einzelne mögliche Cookie Identifikationen. Für jedes Cookie muss zudem die Lebensdauer sowie ein Typ angegeben werden. Die Liste von Cookies, die deine Website verwendest findest du in den Entwicklertools deines Browsers oder auf einer Website wie cookiepedia.co.uk.',
                'name'                   => 'Bezeichnung',
                'identification'         => 'Name (Cookie Identifikation)',
                'identification_comment' => 'Name des Cookies wie es im Browser abgelegt wird z. B. \'_ga\'',
                'provider'               => 'Anbieter',
                'provider_comment'       => 'Gemäss ePrivacy Recht muss die Website oder Domain des Cookies angegeben werden. (Angabe ohne https:// und abschliessendem /)',
                'purpose'                => 'Zweck',
                'purpose_comment'        => 'Beschreibe den Zweck dieses Levels in einem einzelnen Paragraphen. Artikel 5 verlangt, dass eine granulare Zustimmung des Besuchers verlangt wird.',
                'expiry'                 => 'Ablauf/Lebensdauer',
                'expiry_comment'         => 'Gemäss ePrivacy Recht muss angegeben werden, wie lange das Cookie im Browser gespeichert bleibt. e.g. Sitzung, 3 Monate, 2 Jahre.',
                'type'                   => 'Typ',
                'type_comment'           => 'Gemäss ePrivacy Recht, muss definiert werden, um was für eine Art Cookie oder Modul es sich hierbei handelt.',
            ],
        ],
        'tabs'   => [
            'contact'      => 'Kontaktdaten',
            'levels'       => 'Abstufungen',
            'provider'     => 'Anbieter',
            'item_details' => 'Detailangaben',
        ],
    ],
    'permissions'     => [
        'manage_cookie_consent' => 'Verwalte Cookie Consent Einstellungen',
        'manage_data_retention' => 'Verwalte Datenaufbewahrung',
        'manage_cookie_groups'  => 'Kann Cookie-Gruppen verwalten',
    ],
];