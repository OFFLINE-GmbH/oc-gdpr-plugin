<?php
return [
    "common" => [
        "contact_details" => "Kontaktdaten",
        "disabled" => "Deaktiviert",
        "enabled" => "Aktiviert",
        "links" => "Links",
        "save_settings" => "Einstellungen speichern",
        "sorted" => "Reihenfolge aktualisiert"
    ],
    "consent_manager" => [
        "description" => "Bindet den Klaro! Constent Manager ein",
        "include_assets" => [
            "description" => "Binde alle benötigten JS-Abhängigeiten automatisch ein",
            "title" => "Abhängigkeiten laden"
        ],
        "style_prefix" => [
            "description" => "Verwende diese CSS-Klasse im Klaro! HTML-Markup (entfernt Standardstyles)",
            "title" => "CSS-Prefix"
        ]
    ],
    "cookie" => [
        "fields" => [
            "code" => "Code",
            "code_comment" => "Für die Verwendung im Frontend (must du nicht anpassen)",
            "contact_details_dpo" => "Kontaktdaten «Data Controller»",
            "contact_details_dpo_comment" => "Gemäss ePrivacy Recht (Artikel 13, §1, A und Präambel 42), müssen die Kontaktdaten des DPO bekanntgegeben werden, z. B. Cloudflare, Inc. 101 Townsend St. San Francisco, CA 94107. Data Protection Officer, privacyquestions@cloudflare.com (Die Angabe einer E-Mail-Adresse ist optional)",
            "contact_links" => ["href" => "Linkziel (absolute URL)", "name" => "Anzeigetext"],
            "contact_links_dpo" => "Links zum «Data Controller»",
            "contact_links_dpo_comment" => "Gemäss ePrivacy Recht (Artikel 13, §2, B, C und D), müssen ‒ sofern vorhanden ‒ Links zu Datenschutzerklärungen, Nutzungsbedungungen und Opt-Out Seiten bekanntgegeben werden.",
            "contact_links_dpo_prompt" => "Neuen Link hinzufügen",
            "cookie_levels" => [
                "expiry" => "Ablauf/Lebensdauer",
                "expiry_comment" => "Gemäss ePrivacy Recht muss angegeben werden, wie lange das Cookie im Browser gespeichert bleibt. e.g. Sitzung, 3 Monate, 2 Jahre.",
                "identification" => "Name (Cookie Identifikation)",
                "identification_comment" => "Name des Cookies wie es im Browser abgelegt wird z. B. '_ga'",
                "name" => "Bezeichnung",
                "provider" => "Anbieter",
                "provider_comment" => "Gemäss ePrivacy Recht muss die Website oder Domain des Cookies angegeben werden. (Angabe ohne https:// und abschliessendem /)",
                "purpose" => "Zweck",
                "purpose_comment" => "Beschreibe den Zweck dieses Levels in einem einzelnen Paragraphen. Artikel 5 verlangt, dass eine granulare Zustimmung des Besuchers verlangt wird.",
                "purpose_label" => "Abstufungen",
                "purpose_prompt" => "Abstufung hinzufügen",
                "section1_comment" => "Gemäss ePrivacy Recht (Präambel 32 und Artikel 29) muss ein granularer Opt-In angeboten werden. Dies bedeutet, dass einzelne Abstufungen für das Tracking mit einem Cookie angeboten werden müssen. Zum Beispiel kann für Google Analytics \"kein Tracking\" angeboten werden, \"einfaches Tracking\" bei dem wenige Details gesammelt werden oder \"vollständies Tracking\" bei dem personenbezogene Daten und alle Details erfasst werden. Die Anzahl definierter Levels hängt vom verwendeten Service ab.",
                "section1_label" => "Tipps zu den Abstufungen",
                "section2_comment" => "Du kannst so viele Detailangaben machen wie du willst. Im Falle eines Cookies musst du alle Cookie Identifikationen eintragen. Für Google Analytics handelt es sich beispielsweise um bis zu acht oder mehr einzelne mögliche Cookie Identifikationen. Für jedes Cookie muss zudem die Lebensdauer sowie ein Typ angegeben werden. Die Liste von Cookies, die deine Website verwendest findest du in den Entwicklertools deines Browsers oder auf einer Website wie cookiepedia.co.uk.",
                "section2_label" => "Tipps zu den Detailangaben",
                "type" => "Typ",
                "type_comment" => "Gemäss ePrivacy Recht, muss definiert werden, um was für eine Art Cookie oder Modul es sich hierbei handelt."
            ],
            "initial_status" => "",
            "intial_status" => "Dieses Cookie ist standardmässig aktiviert",
            "item_details" => "Detailangaben",
            "levels" => "Cookie-Levels",
            "name_owner" => "Eigentümer",
            "name_owner_comment" => "Name des Eigentümers des Dienstes z. B. Google Analytics",
            "name_owner_comments" => "",
            "purpose" => "Zweck",
            "purpose_comment" => "Gemäss ePrivacy Recht (Artikel 4, §11 und Artikel 13, §1, C und §2, F), müssen der Anwendungszweck, die Verarbeitung und allfällige Benachrichtigungen beschrieben werden z. B. 'Diese Cookies werden für das AddThis social sharing widget verwendet um die Anzahl Shares korrekt anzuzeigen'."
        ],
        "tabs" => [
            "contact" => "Kontaktdaten",
            "item_details" => "Detailangaben",
            "levels" => "Abstufungen",
            "provider" => "Anbieter"
        ]
    ],
    "cookie_banner" => [
        "accept" => "Akzeptieren",
        "advanced_settings" => "Erweiterte Einstellungen",
        "cookie_manager_page" => [
            "description" => "Auf dieser Seite muss die cookieManager Komponente platziert werden",
            "empty" => "Ohne erweiterte Einstellungen",
            "title" => "Seite für erweiterte Einstellungen"
        ],
        "decline" => "Ablehnen",
        "description" => "Zeigt ein Cookie-Banner an",
        "include_css" => [
            "description" => "Lädt die mitgelieferte CSS-Datei",
            "title" => "Standard CSS einbinden"
        ],
        "include_js" => [
            "description" => "Lädt die mitgelieferte JS-Datei",
            "title" => "Standard JS einbinden"
        ],
        "message" => "Wir verwenden Cookies um Inhalte zu personalisieren und unsere Besucherstatistik zu führen. Bitte entscheiden Sie sich, ob Sie unsere Cookies akzeptieren möchten.",
        "update_partial" => [
            "description" => "Dieses Partial wird nach dem Akzeptieren automatisch neu geladen.",
            "title" => "Partial für Soft-Reload"
        ],
        "update_selector" => [
            "description" => "Das Partial wird nach dem Akzeptieren in diesem Element neu geladen.",
            "title" => "CSS-Selector für Soft-Reload"
        ]
    ],
    "cookie_group" => [
        "fields" => [
            "default_level" => "Dieses Level ist für den Besucher voreingestellt",
            "initial_status" => "Initialzustand",
            "initial_status_comment" => "Diese Cookiegruppe ist standardmässig aktiv",
            "name" => "Gruppenname",
            "required" => "Benötigt damit die Website korrekt funktioniert",
            "required_comment" => "Die Cookies oder Module dieser Gruppe werden benötigt, damit die Website korrekt funktioniert. Aus diesem Grund können Sie vom Besucher nicht deaktiviert werden.",
            "slug" => "Slug"
        ],
        "tabs" => ["cookies" => "Cookies", "description" => "Beschreibung"]
    ],
    "cookie_manager" => [
        "description" => "Zeigt eine Übersicht aller Cookies mit Bearbeitungsmöglichkeit an",
        "expiry" => [
            "3" => "In 3 Monaten erneut nachfragen",
            "6" => "In 6 Monaten erneut nachfragen",
            "12" => "In 1 Jahr erneut nachfragen",
            "24" => "In 2 Jahren erneut nachfragen",
            "36" => "In 3 Jahren erneut nachfragen"
        ]
    ],
    "permissions" => [
        "manage_cookie_consent" => "Verwalte Cookie Consent Einstellungen",
        "manage_cookie_groups" => "Kann Cookie-Gruppen verwalten",
        "manage_data_retention" => "Verwalte Datenaufbewahrung"
    ],
    "plugin" => [
        "description" => "Mache deine Website GDPR und ePrivacy konform",
        "name" => "GDPR und ePrivacy"
    ],
    "settings" => [
        "cookie_consent" => [
            "apps" => [
                "repeater" => [
                    "application_state" => [
                        "comment" => "Ob diese App standardmässig aktiviert sein soll. Diese Option überschreibt die globale Einstellung.",
                        "label" => "Standardmässig aktiv"
                    ],
                    "callback" => [
                        "comment" => "Diese JavaScript Funktion wird immer dann ausgeführt, wenn diese App vom Kunden zugelassen wird.<br /><pre><small>function (consent, app) { // ... }</small></pre>",
                        "label" => "Callback-Funktion"
                    ],
                    "cookies" => [
                        "comment" => "String oder RegEx des Cookie Namens. Diese Cookies werden automatisch gelöscht, wenn der Besucher der Verwendung dieser App nicht zustimmt (z. B. /^_ga_.*\$/ oder custom_tracker_cookie)",
                        "label" => "Cookies dieser App"
                    ],
                    "name" => [
                        "comment" => "Ein einfacher und kurzer Name (z. B. google-analytics)",
                        "label" => "Name"
                    ],
                    "only_once" => [
                        "comment" => "Die Scripts dieser App nur einmal laden, auch wenn der Besucher die Zustimmung mehrfach de- und wieder aktiviert.",
                        "label" => "App nur einmal initialisieren"
                    ],
                    "opt_out" => [
                        "comment" => "Die Scripts dieser App werden beim ersten Seitenaufruf geladen. Der Kunde muss die Verwendung explizit verweigern.",
                        "label" => "Opt-Out"
                    ],
                    "purposes" => [
                        "comment" => "Diese Bezeichnungen müssen in den Übersetzungen übersetzt werden (z. B. analytics, user-tracking)",
                        "label" => "Anwendungszwecke"
                    ],
                    "required" => [
                        "comment" => "Die Zustimmung für diese App kann vom Kunden nicht deaktiviert werden",
                        "label" => "Zustimmung erzwungen"
                    ],
                    "title" => [
                        "comment" => "Wird dem Besucher angezeigt (z. B. Google Analytics)",
                        "label" => "Titel"
                    ]
                ]
            ],
            "cookie_expires_after_days" => [
                "comment" => "Die vom Besucher getroffenen Einstellungen werden nach dieser Anzahl Tage gelöscht.",
                "label" => "Lebensdauer der Consent Cookies in Tagen"
            ],
            "default_application_state" => [
                "comment" => "Ob alle aufgelisteten Applikationen standardmässig aktiv oder inaktiv sind",
                "label" => "Standard Zustand der einzelnen Applikationen"
            ],
            "description" => "Einstellungen zum Klaro! Manager",
            "label" => "Cookie Consent",
            "lang" => [
                "comment" => "Alle verfügbaren Sprachen findest du in der Klaro! Dokumentation",
                "label" => "Zweistelliger Sprachcode"
            ],
            "must_consent" => [
                "comment" => "Zeige den Consent Manager direkt nach dem ersten Seitenaufruf an um eine Zustimmung zu erzwingen",
                "label" => "Zustimmung erzwingen"
            ],
            "privacy_policy" => [
                "comment" => "Relativer oder absoluter Link zur Datenschutzerklärung",
                "label" => "Datenschutzerklärung"
            ],
            "tabs" => ["apps" => "Apps", "general" => "Allgemein", "translations" => "Übersetzungen"],
            "translations" => [
                "repeater" => ["code" => ["label" => "Zweistelliger Sprachcode"], "json" => ["label" => "JSON"]]
            ]
        ],
        "cookies" => ["description" => "Cookies und Modul-Management", "label" => "Cookies und Module"],
        "data_retention" => [
            "default_keep_days" => [
                "comment" => "Gilt für alle Plugins solange nicht anders definiert",
                "label" => "Automatische Datenlöschung nach Anzahl Tagen"
            ],
            "description" => "Einstellungen zur Datenaufbewahrung",
            "enabled" => [
                "comment" => "Lösche Daten automatisch nachdem sie abgelaufen sind",
                "label" => "Automatische Datenlöschung aktiv"
            ],
            "keep_days" => ["label" => "Automatische Datenlöschung nach Anzahl Tagen"],
            "label" => "Datenaufbewahrung"
        ],
        "info" => [
            "bannerlaws_title" => "Bannerrichtlinien für bestimmte Länder",
            "cookieconsent_title" => "Cookie-Zustimmung",
            "cookiesmodulessetup_title" => "Einrichtungsbeispiel zu Cookies und Modulen",
            "cookiesmodulesuserguide_title" => "Anleitung zu Cookies und Modulen",
            "dataretention_title" => "Anleitung zur Datenlöschung",
            "description" => "Informationen und Hilfe zur Einrichtung",
            "dpolinks_title" => "Kontaktlinks für DPOs und meistgenutzte Cookies",
            "index_title" => "Willkommen zum OctoberCMS GDPR und ePrivacy Plugin",
            "label" => "Info und Hilfe",
            "overallinfo_title" => "Informationen über GDPR und ePrivacy"
        ]
    ]
];
