<?php
return [
    "common" => [
        "contact_details" => "Kontaktné údaje",
        "disabled" => "Blokované",
        "enabled" => "Povolené",
        "links" => "Odkazy",
        "save_settings" => "Uložiť nastavenia",
        "sorted" => "Usporiadanie úspešne upravené"
    ],
    "consent_manager" => [
        "description" => "Zahrnie Klaro! Consent Manager",
        "include_assets" => [
            "description" => "Automaticky zahrnie všetky potrebné JS súbory",
            "title" => "Zahrnúť súbory"
        ],
        "style_prefix" => [
            "description" => "Použite túto css triedu v Klaro! HTML značkovaní (odstráni predvolené štýly)",
            "title" => "CSS prefix"
        ]
    ],
    "cookie" => [
        "fields" => [
            "code" => "Kód",
            "code_comment" => "Toto je vygenerované aby plugin fungoval (toto nemusíte upravovať)",
            "contact_details_dpo" => "Kontaktné údaje správcu údajov",
            "contact_details_dpo_comment" => "Podľa zákona ePrivacy (Článok 13, paragraf 1, A a recitál 42), musíte poskytnúť kontaktnú adresu DPO napr. Cloudflare, Inc. 101 Townsend St. San Francisco, CA 94107. Upozornenie: Data Protection Officer, privacyquestions@cloudflare.com (vezmite na vedomie, že emailová adresa je nepovinná)",
            "contact_links" => ["href" => "Cieľ odkazu (absolútna URL)", "name" => "Text kotvy"],
            "contact_links_dpo" => "Kontaktné linky správcu údajov",
            "contact_links_dpo_comment" => "Podľa zákona ePrivacy (Článok 13, paragraf 2, B, C a D), musíte poskytnúť kontaktné odkazy pre 'právo sťažovať sa orgánu dohľadu a prístup k správnej politike v oblasti údajov' to znamená prepojenie s ich Zásadami ochrany osobných údajov, Zmluvnými podmienkami, Ochrana osobných údajov cookie a Opt-out stránok, ak ich majú.",
            "contact_links_dpo_prompt" => "Pridať nový odkaz",
            "cookie_levels" => [
                "expiry" => "Trvanie/Expirácia",
                "expiry_comment" => "Podľa zákona ePrivacy musíte uviesť ako dlho budú uložené v užívateľovom prehliadači napr. SESSION, 3 mesiace, 2 roky.",
                "identification" => "Názov (Cookie Identification)",
                "identification_comment" => "Názov prefixu cookie napr. '_ga'",
                "name" => "Názov",
                "provider" => "Poskytovateľ",
                "provider_comment" => "Podľa zákona ePrivacy, musíte uviesť meno domény. (bez https://, www a / na konci)",
                "purpose" => "Účel",
                "purpose_comment" => "Popíšte účel použitia na každej granulovanej úrovni jedným odsekom. Článok 5 vyžaduje aby bol súhlas vyžiadaný v granulárnom štýle pre 'špecifické, explicitné' účely.",
                "purpose_label" => "Granulované úrovne použitia",
                "purpose_prompt" => "Pridajte granulované úrovne použitia",
                "section1_comment" => "Podľa zákona ePrivacy (Recitál 32 a článok 29 usmernenia pracovnej skupiny nov 2017), použite proces granulácie na prihlásenie s funkciou správy úrovní. To znamená, že má nastavenie vypnutia, potom má základné nastavenie, potom má pokročilejšie nastavenie atď. Až do úplného nastavenia. Príkladom toho môže byť služba Google Analytics, kde máme nastavenie Off, potom základné nastavenie sledovania, základné nastavenie sledovania plus doplnky a nakoniec úplné nastavenie so všetkým. Počet úrovní závisí od toho, čo pridávate.",
                "section1_label" => "Užitočný tip pre granulované úrovne použitia",
                "section2_comment" => "Môžete uviesť toľko podrobností o položkách, ako chcete, ak ide o súbor cookie, uistite sa, že uvádzate všetky mená identifikácie súborov cookie. Napríklad služba Google Analytics môže mať 8 alebo viacerých odlišných. Uistite sa, že máte rovnaký počet polí Name (Identifikácia cookie), Duration / Expiry a Type. Ak chcete vyhľadať zoznam súborov cookie webových stránok v prehliadači Google Chrome, prejdite na položku Nástroje pre vývojárov> Aplikácia> Súbory cookie. Môžete tiež použiť webovú lokalitu: https://cookiepedia.co.uk/ na vyhľadávanie cookies.",
                "section2_label" => "Užitočný tip pre detaily položky",
                "type" => "Typ",
                "type_comment" => "Podľa zákona ePrivacy musíte uviesť o aký typ cookies alebo modul ide, pre uľahčenie sme vytvorili drop=down menu"
            ],
            "initial_status" => "",
            "intial_status" => "Toto cookie je predvolene povolené",
            "item_details" => "Detaily položky",
            "levels" => "Levely Cookie",
            "name_owner" => "Vlastník",
            "name_owner_comment" => "Meno vlastníka služby napr. Google Analytics",
            "name_owner_comments" => "",
            "purpose" => "Účel",
            "purpose_comment" => "Podľa zákona ePrivacy (Článok 4, paragraf 11 a článok 13, paragraf 1, C a paragraf 2, F), musíte popísať účel použitia, spracovanie a upozornenia napr. 'Tieto cookies sú použité z widgetu AddThis spre sociálne zdieľanie aby sa zabezpečilo, že uvidíte aktuálny počet ak stránku budete zdieľať'."
        ],
        "tabs" => [
            "contact" => "Kontaktné informácie",
            "item_details" => "Správa detailov položky",
            "levels" => "Správa úrovní",
            "provider" => "Poskytovateľ"
        ]
    ],
    "cookie_banner" => [
        "accept" => "Súhlasím",
        "advanced_settings" => "Pokročilé nastavenia",
        "cookie_manager_page" => [
            "description" => "Umiestnite komponent cookieManager na túto stránku",
            "empty" => "Bez pokročilých nastavení",
            "title" => "Stránka pre pokročilé nastavenia"
        ],
        "decline" => "Nesúhlasím",
        "description" => "Zobrazuje cookie panel",
        "include_css" => [
            "description" => "Zahrnúť predvolené štýly pre tento komponent",
            "title" => "Zahrnúť CSS"
        ],
        "include_js" => [
            "description" => "Zahrnúť predvolené skripty pre tento komponent",
            "title" => "Zahrnúť JS"
        ],
        "message" => "Na prispôsobenie obsahu a analýzu návštevnosti používame súbory cookie. Rozhodnite sa, či ste ochotní prijímať súbory cookie z našich webových stránok.",
        "update_partial" => [
            "description" => "Táto čiastková šablóna bude nahratá v prípade, že užívateľ súhlasí.",
            "title" => "Čiastková šablóna pre soft reload"
        ],
        "update_selector" => [
            "description" => "Čiastková šablóna bude nahraná do tohoto elementu.",
            "title" => "CSS selektor pre soft reload"
        ]
    ],
    "cookie_group" => [
        "fields" => [
            "default_level" => "Tento level je pre užívateľ dopredu zvolený",
            "initial_status" => "Povolené pri spustení",
            "initial_status_comment" => "Toto nastaví položku ako povolenú pri spustení, vezmite prosím na vedomie, že ePrivacy vyžaduje aby viaceré položky boli pri spustení blokované",
            "name" => "Meno skupiny",
            "required" => "Nevyhnutné cookies sú potrebné pre fungovanie webu.",
            "required_comment" => "Cookies a/alebo Moduly v tejto skupine sú potrebné pre správne a preto nemôžu byť blokované užívateľom.",
            "slug" => "Slug"
        ],
        "tabs" => ["cookies" => "Cookies", "description" => "Popis"]
    ],
    "cookie_manager" => [
        "description" => "Zobrazí prehľad a formulár pre úpravy pre všetky cookies, ktoré ste definovali v administrácií",
        "expiry" => [
            "3" => "Spýtať sa znova o 3 mesiace",
            "6" => "Spýtať sa znova o 6 mesiacov",
            "12" => "Spýtať sa znova o 1 rok",
            "24" => "Spýtať sa znova o 2 roky",
            "36" => "Spýtať sa znova o 3 roky"
        ]
    ],
    "permissions" => [
        "manage_cookie_consent" => "Môže spravovať nastavenie cookie súhlasu",
        "manage_cookie_groups" => "Môže spravovať skupiny cookies",
        "manage_data_retention" => "Môže spravovať uchovávanie údajov"
    ],
    "plugin" => [
        "description" => "Urobte svoju stránku s nariadeniami GDPR a ePrivacy",
        "name" => "GDPR a ePrivacy"
    ],
    "settings" => [
        "cookie_consent" => [
            "apps" => [
                "repeater" => [
                    "application_state" => [
                        "comment" => "Povoliť túto aplikáciu automaticky. Toto prepíše globálne nastavenia",
                        "label" => "Povolené automaticky"
                    ],
                    "callback" => [
                        "comment" => "Táto JavaScript funkcia je zavolaná vždy keď užívateľ povolí túto aplikáciu.<br /><pre><small>function (consent, app) { // ... }</small></pre>",
                        "label" => "Callback funkcia"
                    ],
                    "cookies" => [
                        "comment" => "Text alebo RegEx cookie mien. Tieto cookies budú automaticky zmazané ak užívateľ zablokuje túto aplikáciu. (napr. /^_ga_.*\$/ alebo custom_tracker_cookie)",
                        "label" => "Cookies pre túto aplikáciu"
                    ],
                    "name" => [
                        "comment" => "Jednoduché a krátke meno pre túto aplikáciu (napr. google-analytics)",
                        "label" => "Meno"
                    ],
                    "only_once" => [
                        "comment" => "Skripty tejto aplikácie sú nahrané iba raz aj v prípade, že ich návštevník povolí viacero krát.",
                        "label" => "Nahrať skripty iba raz"
                    ],
                    "opt_out" => [
                        "comment" => "Skripty tejto aplikácie sú nahrané na prvej stránke bez povolenia užívateľa.",
                        "label" => "Rozhodnúť sa k neúčasti"
                    ],
                    "purposes" => [
                        "comment" => "Tieto účely musia byť preložené v sekcií prekladov. (napr. analytics, user-tracking)",
                        "label" => "Účely"
                    ],
                    "required" => [
                        "comment" => "Táto aplikácia nemôže byť blokovaná",
                        "label" => "Súhlas je vyžadovaný"
                    ],
                    "title" => ["comment" => "Zobraziť meno (napr. Google Analytics)", "label" => "Nadpis"]
                ]
            ],
            "cookie_expires_after_days" => [
                "comment" => "Nastavenia užívateľa\\ľov sú uložené daný počet dní.",
                "label" => "Životnosť Cookie v dňoch"
            ],
            "default_application_state" => [
                "comment" => "Udeliť súhlas pre všetky aplikácie automaticky",
                "label" => "Predvolený stav aplikácie"
            ],
            "description" => "Nastaviť Klaro! Manager",
            "label" => "Cookie Súhlas",
            "lang" => [
                "comment" => "Všetky dostupné kódy nájdete v Klaro! dokumentácií",
                "label" => "Kód jazyka"
            ],
            "must_consent" => [
                "comment" => "Zobrazí panel priamo na prvej stránke aby sa užívateľ rozhodol",
                "label" => "Musí súhlasiť"
            ],
            "privacy_policy" => [
                "comment" => "Relatívny alebo absolútny link na vaše zásady ochrany osobných údajov",
                "label" => "Ochrana osobných údajov"
            ],
            "tabs" => ["apps" => "Applikácie", "general" => "Všeobecné", "translations" => "Preklady"],
            "translations" => [
                "repeater" => ["code" => ["label" => "Kód jazyka"], "json" => ["label" => "JSON"]]
            ]
        ],
        "cookies" => ["description" => "Správa Cookies a Modulov", "label" => "Cookies a Moduly"],
        "data_retention" => [
            "default_keep_days" => [
                "comment" => "Platné pre všetky registrované pluginy ak nie je nižšie uvedené inak",
                "label" => "Zmazať dáto po dňoch"
            ],
            "description" => "Nastavenia uchovávania údajov",
            "enabled" => [
                "comment" => "Automaticky zmazať staré dáta po ich expirácií",
                "label" => "Čistenie povolené"
            ],
            "keep_days" => ["label" => "Zmazať dáta po dňoch"],
            "label" => "Uchovávanie údajov"
        ],
        "info" => [
            "bannerlaws_title" => "Panelové zákony vzťahujúce sa na každú krajinu",
            "cookieconsent_title" => "Užívateľská príručka pre Cookie Súhlas",
            "cookiesmodulessetup_title" => "Príklad nastavenia Cookies a Modulov",
            "cookiesmodulesuserguide_title" => "Užívateľská príručka pre Cookies a Moduly",
            "dataretention_title" => "Užívateľská príručka pre Uchovávanie údajov",
            "description" => "Informácie a pomoc s nastaveniami",
            "dpolinks_title" => "Kontaktné údaje pre DPO najpoužívanejších cookies",
            "index_title" => "Vitajte na plugine OctoberCMS GDPR and ePrivacy",
            "label" => "Info a Pomoc",
            "overallinfo_title" => "Informácie o GDPR a ePrivacy"
        ]
    ]
];
