<?php return [
    'plugin' => [
        'name' => 'GDPR',
        'description' => 'Mache deine Website GDPR konform',
    ],
    'consent_manager' => [
        'description' => 'Bindet den Klaro! Constent Manager ein',
        'include_assets' => [
            'title' => 'Abhängigkeiten laden',
            'description' => 'Binde alle benötigten JS-Abhängigeiten automatisch ein',
        ],
        'style_prefix' => [
            'title' => 'CSS-Prefix',
            'description' => 'Verwende diese CSS-Klasse im Klaro! HTML-Markup (entfernt Standardstyles)',
        ],
    ],
    'settings' => [
        'cookie_consent' => [
            'label' => 'Cookie Consent',
            'description' => 'Einstellungen zum Klaro! Manager',
            'cookie_expires_after_days' => [
                'label' => 'Lebensdauer der Consent Cookies in Tagen',
                'comment' => 'Die vom Besucher getroffenen Einstellungen werden nach dieser Anzahl Tage gelöscht.',
            ],
            'privacy_policy' => [
                'label' => 'Datenschutzerklärung',
                'comment' => 'Relativer oder absoluter Link zur Datenschutzerklärung',
            ],
            'default_application_state' => [
                'label' => 'Standard Zustand der einzelnen Applikationen',
                'comment' => 'Ob alle aufgelisteten Applikationen standardmässig aktiv oder inaktiv sind',
            ],
            'must_consent' => [
                'label' => 'Forciere Zustimmung',
                'comment' => 'Zeige den Consent Manager direkt nach dem ersten Seitenaufruf an um eine Zustimmung zu forcieren',
            ],
            'lang' => [
                'label' => 'Zweistelliger Sprachcode',
                'comment' => 'Alle verfügbaren Sprachen findest du in der Klaro! Dokumentation',
            ],
            'tabs' => [
                'translations' => 'Übersetzungen',
                'apps' => 'Apps',
                'general' => 'Allgemein',
            ],
            'translations' => [
                'repeater' => [
                    'code' => [
                        'label' => 'Zweistelliger Sprachcode',
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
                        'comment' => 'Ein einfacher und kurzer Name (z. B. google-analytics)',
                    ],
                    'application_state' => [
                        'label' => 'Standardmässig aktiv',
                        'comment' => 'Ob diese App standardmässig aktiviert sein soll. Diese Option übersteuert die globale Einstellung.',
                    ],
                    'required' => [
                        'label' => 'Zustimmung erzwungen',
                        'comment' => 'Die Zustimmung für diese App kann vom Kunden nicht deaktiviert werden',
                    ],
                    'opt_out' => [
                        'label' => 'Opt-Out',
                        'comment' => 'Die Scripts dieser App werden beim ersten Seitenaufruf geladen. Der Kunde muss die Verwendung explizit verweigern.',
                    ],
                    'only_once' => [
                        'label' => 'App nur einmal initialisieren',
                        'comment' => 'Die Scripts dieser App nur einmal laden, auch wenn der Besucher die Zustimmung mehrfach de- und wieder aktiviert.',
                    ],
                    'title' => [
                        'label' => 'Titel',
                        'comment' => 'Wird dem Besucher angezeigt (z. B. Google Analytics)',
                    ],
                    'purposes' => [
                        'label' => 'Anwendungszwecke',
                        'comment' => 'Diese Bezeichnungen müssen in den Übersetzungen übersetzt werden (z. B. analytics, user-tracking)',
                    ],
                    'cookies' => [
                        'label' => 'Cookies dieser App',
                        'comment' => 'String oder RegEx des Cookie Namens. Diese Cookies werden automatisch gelöscht, wenn der Besucher der Verwendung dieser App nicht zustimmt (z. B. /^_ga_.*$/ oder custom_tracker_cookie)',
                    ],
                    'callback' => [
                        'label' => 'Callback-Funktion',
                        'comment' => 'Diese JavaScript Funktion wird immer dann ausgeführt, wenn diese App vom Kunden zugelassen wird.<br /><pre><small>function (consent, app) { // ... }</small></pre>',
                    ],
                ],
            ],
        ],
    ],
    'permissions' => [
        'manage_cookie_consent' => 'Verwalte Cookie Consent Einstellungen',
    ],
];