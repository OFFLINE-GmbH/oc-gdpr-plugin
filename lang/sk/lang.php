<?php return [
    'plugin'          => [
        'name'        => 'GDPR a ePrivacy',
        'description' => 'Urobte svoju stránku s nariadeniami GDPR a ePrivacy',
    ],
    'common'          => [
        'enabled'         => 'Povolené',
        'disabled'        => 'Blokované',
        'sorted'          => 'Usporiadanie úspešne upravené',
        'save_settings'   => 'Uložiť nastavenia',
        'contact_details' => 'Kontaktné údaje',
        'links'           => 'Odkazy',
    ],
    'cookie_banner'   => [
        'description'         => 'Zobrazuje cookie panel',
        'message'             => 'Na prispôsobenie obsahu a analýzu návštevnosti používame súbory cookie. Rozhodnite sa, či ste ochotní prijímať súbory cookie z našich webových stránok.',
        'advanced_settings'   => 'Pokročilé nastavenia',
        'decline'             => 'Nesúhlasím',
        'accept'              => 'Súhlasím',
        'include_css'         => [
            'title'       => 'Zahrnúť CSS',
            'description' => 'Zahrnúť predvolené štýly pre tento komponent',
        ],
        'include_js'          => [
            'title'       => 'Zahrnúť JS',
            'description' => 'Zahrnúť predvolené skripty pre tento komponent',
        ],
        'hard_reload'         => [
            'title'       => 'Úplný reload po tom ako užívateľ súhlasí',
            'description' => 'Urobí úplný reloaad po tom ako sa užívateľ rozhodol obnoviť všetky vaše súbory závislostí',
        ],
        'update_partial'      => [
            'title'       => 'Čiastková šablóna pre soft reload',
            'description' => 'Táto čiastková šablóna bude nahratá v prípade, že užívateľ súhlasí.',
        ],
        'update_selector'     => [
            'title'       => 'CSS selektor pre soft reload',
            'description' => 'Čiastková šablóna bude nahraná do tohoto elementu.',
        ],
        'cookie_manager_page' => [
            'title'       => 'Stránka pre pokročilé nastavenia',
            'description' => 'Umiestnite komponent cookieManager na túto stránku',
            'empty'       => 'Bez pokročilých nastavení',
        ],
    ],
    'cookie_manager'  => [
        'description' => 'Zobrazí prehľad a formulár pre úpravy pre všetky cookies, ktoré ste definovali v administrácií',
        'expiry'      => [
            3  => 'Spýtať sa znova o 3 mesiace',
            6  => 'Spýtať sa znova o 6 mesiacov',
            12 => 'Spýtať sa znova o 1 rok',
            24 => 'Spýtať sa znova o 2 roky',
            36 => 'Spýtať sa znova o 3 roky',
        ],
    ],
    'consent_manager' => [
        'description'    => 'Zahrnie Klaro! Consent Manager',
        'include_assets' => [
            'title'       => 'Zahrnúť súbory',
            'description' => 'Automaticky zahrnie všetky potrebné JS súbory',
        ],
        'style_prefix'   => [
            'title'       => 'CSS prefix',
            'description' => 'Použite túto css triedu v Klaro! HTML značkovaní (odstráni predvolené štýly)',
        ],
    ],
    'settings'        => [
        'cookies'        => [
            'label'       => 'Cookies a Moduly',
            'description' => 'Správa Cookies a Modulov',
        ],
        'cookie_consent' => [
            'label'                     => 'Cookie Súhlas',
            'description'               => 'Nastaviť Klaro! Manager',
            'cookie_expires_after_days' => [
                'label'   => 'Životnosť Cookie v dňoch',
                'comment' => 'Nastavenia užívateľa\ľov sú uložené daný počet dní.',
            ],
            'privacy_policy'            => [
                'label'   => 'Ochrana osobných údajov',
                'comment' => 'Relatívny alebo absolútny link na vaše zásady ochrany osobných údajov',
            ],
            'default_application_state' => [
                'label'   => 'Predvolený stav aplikácie',
                'comment' => 'Udeliť súhlas pre všetky aplikácie automaticky',
            ],
            'must_consent'              => [
                'label'   => 'Musí súhlasiť',
                'comment' => 'Zobrazí panel priamo na prvej stránke aby sa užívateľ rozhodol',
            ],
            'lang'                      => [
                'label'   => 'Kód jazyka',
                'comment' => 'Všetky dostupné kódy nájdete v Klaro! dokumentácií',
            ],
            'tabs'                      => [
                'translations' => 'Preklady',
                'apps'         => 'Applikácie',
                'general'      => 'Všeobecné',
            ],
            'translations'              => [
                'repeater' => [
                    'code' => [
                        'label' => 'Kód jazyka',
                    ],
                    'json' => [
                        'label' => 'JSON',
                    ],
                ],
            ],
            'apps'                      => [
                'repeater' => [
                    'name'              => [
                        'label'   => 'Meno',
                        'comment' => 'Jednoduché a krátke meno pre túto aplikáciu (napr. google-analytics)',
                    ],
                    'application_state' => [
                        'label'   => 'Povolené automaticky',
                        'comment' => 'Povoliť túto aplikáciu automaticky. Toto prepíše globálne nastavenia',
                    ],
                    'required'          => [
                        'label'   => 'Súhlas je vyžadovaný',
                        'comment' => 'Táto aplikácia nemôže byť blokovaná',
                    ],
                    'opt_out'           => [
                        'label'   => 'Rozhodnúť sa k neúčasti',
                        'comment' => 'Skripty tejto aplikácie sú nahrané na prvej stránke bez povolenia užívateľa.',
                    ],
                    'only_once'         => [
                        'label'   => 'Nahrať skripty iba raz',
                        'comment' => 'Skripty tejto aplikácie sú nahrané iba raz aj v prípade, že ich návštevník povolí viacero krát.',
                    ],
                    'title'             => [
                        'label'   => 'Nadpis',
                        'comment' => 'Zobraziť meno (napr. Google Analytics)',
                    ],
                    'purposes'          => [
                        'label'   => 'Účely',
                        'comment' => 'Tieto účely musia byť preložené v sekcií prekladov. (napr. analytics, user-tracking)',
                    ],
                    'cookies'           => [
                        'label'   => 'Cookies pre túto aplikáciu',
                        'comment' => 'Text alebo RegEx cookie mien. Tieto cookies budú automaticky zmazané ak užívateľ zablokuje túto aplikáciu. (napr. /^_ga_.*$/ alebo custom_tracker_cookie)',
                    ],
                    'callback'          => [
                        'label'   => 'Callback funkcia',
                        'comment' => 'Táto JavaScript funkcia je zavolaná vždy keď užívateľ povolí túto aplikáciu.<br /><pre><small>function (consent, app) { // ... }</small></pre>',
                    ],
                ],
            ],
        ],
        'data_retention' => [
            'label'             => 'Uchovávanie údajov',
            'description'       => 'Nastavenia uchovávania údajov',
            'enabled'           => [
                'label'   => 'Čistenie povolené',
                'comment' => 'Automaticky zmazať staré dáta po ich expirácií',
            ],
            'default_keep_days' => [
                'label'   => 'Zmazať dáto po dňoch',
                'comment' => 'Platné pre všetky registrované pluginy ak nie je nižšie uvedené inak',
            ],
            'keep_days'         => [
                'label' => 'Zmazať dáta po dňoch',
            ],
        ],
        'info'           => [
            'label'                         => 'Info a Pomoc',
            'description'                   => 'Informácie a pomoc s nastaveniami',
            'bannerlaws_title'              => 'Panelové zákony vzťahujúce sa na každú krajinu',
            'cookieconsent_title'           => 'Užívateľská príručka pre Cookie Súhlas',
            'cookiesmodulessetup_title'     => 'Príklad nastavenia Cookies a Modulov',
            'cookiesmodulesuserguide_title' => 'Užívateľská príručka pre Cookies a Moduly',
            'dataretention_title'           => 'Užívateľská príručka pre Uchovávanie údajov',
            'dpolinks_title'                => 'Kontaktné údaje pre DPO najpoužívanejších cookies',
            'overallinfo_title'             => 'Informácie o GDPR a ePrivacy',
            'index_title'                   => 'Vitajte na plugine OctoberCMS GDPR and ePrivacy',
        ],
    ],
    'cookie_group'    => [
        'fields' => [
            'name'                   => 'Meno skupiny',
            'initial_status'         => 'Povolené pri spustení',
            'initial_status_comment' => 'Toto nastaví položku ako povolenú pri spustení, vezmite prosím na vedomie, že ePrivacy vyžaduje aby viaceré položky boli pri spustení blokované',
            'required'               => 'Nevyhnutné cookies sú potrebné pre fungovanie webu.',
            'required_comment'       => 'Cookies a/alebo Moduly v tejto skupine sú potrebné pre správne a preto nemôžu byť blokované užívateľom.',
            'slug'                   => 'Slug',
            'default_level'          => 'Tento level je pre užívateľ dopredu zvolený',
        ],
        'tabs'   => [
            'description' => 'Popis',
            'cookies'     => 'Cookies',
        ],
    ],
    'cookie'          => [
        'fields' => [
            'name_owner'                  => 'Vlastník',
            'name_owner_comment'          => 'Meno vlastníka služby napr. Google Analytics',
            'code'                        => 'Kód',
            'code_comment'                => 'Toto je vygenerované aby plugin fungoval (toto nemusíte upravovať)',
            'intial_status'               => 'Toto cookie je predvolene povolené',
            'levels'                      => 'Levely Cookie',
            'item_details'                => 'Detaily položky',
            'purpose'                     => 'Účel',
            'purpose_comment'             => 'Podľa zákona ePrivacy (Článok 4, paragraf 11 a článok 13, paragraf 1, C a paragraf 2, F), musíte popísať účel použitia, spracovanie a upozornenia napr. \'Tieto cookies sú použité z widgetu AddThis spre sociálne zdieľanie aby sa zabezpečilo, že uvidíte aktuálny počet ak stránku budete zdieľať\'.',
            'contact_details_dpo'         => 'Kontaktné údaje správcu údajov',
            'contact_details_dpo_comment' => 'Podľa zákona ePrivacy (Článok 13, paragraf 1, A a recitál 42), musíte poskytnúť kontaktnú adresu DPO napr. Cloudflare, Inc. 101 Townsend St. San Francisco, CA 94107. Upozornenie: Data Protection Officer, privacyquestions@cloudflare.com (vezmite na vedomie, že emailová adresa je nepovinná)',
            'contact_links_dpo'           => 'Kontaktné linky správcu údajov',
            'contact_links_dpo_comment'   => 'Podľa zákona ePrivacy (Článok 13, paragraf 2, B, C a D), musíte poskytnúť kontaktné odkazy pre \'právo sťažovať sa orgánu dohľadu a prístup k správnej politike v oblasti údajov\' to znamená prepojenie s ich Zásadami ochrany osobných údajov, Zmluvnými podmienkami, Ochrana osobných údajov cookie a Opt-out stránok, ak ich majú.',
            'contact_links_dpo_prompt'    => 'Pridať nový odkaz',
            'contact_links'               => [
                'name' => 'Text kotvy',
                'href' => 'Cieľ odkazu (absolútna URL)',
            ],
            'cookie_levels'               => [
                'purpose_prompt'         => 'Pridajte granulované úrovne použitia',
                'purpose_label'          => 'Granulované úrovne použitia',
                'section1_label'         => 'Užitočný tip pre granulované úrovne použitia',
                'section1_comment'       => 'Podľa zákona ePrivacy (Recitál 32 a článok 29 usmernenia pracovnej skupiny nov 2017), použite proces granulácie na prihlásenie s funkciou správy úrovní. To znamená, že má nastavenie vypnutia, potom má základné nastavenie, potom má pokročilejšie nastavenie atď. Až do úplného nastavenia. Príkladom toho môže byť služba Google Analytics, kde máme nastavenie Off, potom základné nastavenie sledovania, základné nastavenie sledovania plus doplnky a nakoniec úplné nastavenie so všetkým. Počet úrovní závisí od toho, čo pridávate.',
                'section2_label'         => 'Užitočný tip pre detaily položky',
                'section2_comment'       => 'Môžete uviesť toľko podrobností o položkách, ako chcete, ak ide o súbor cookie, uistite sa, že uvádzate všetky mená identifikácie súborov cookie. Napríklad služba Google Analytics môže mať 8 alebo viacerých odlišných. Uistite sa, že máte rovnaký počet polí Name (Identifikácia cookie), Duration / Expiry a Type. Ak chcete vyhľadať zoznam súborov cookie webových stránok v prehliadači Google Chrome, prejdite na položku Nástroje pre vývojárov> Aplikácia> Súbory cookie. Môžete tiež použiť webovú lokalitu: https://cookiepedia.co.uk/ na vyhľadávanie cookies.',
                'name'                   => 'Názov',
                'identification'         => 'Názov (Cookie Identification)',
                'identification_comment' => 'Názov prefixu cookie napr. \'_ga\'',
                'provider'               => 'Poskytovateľ',
                'provider_comment'       => 'Podľa zákona ePrivacy, musíte uviesť meno domény. (bez https://, www a / na konci)',
                'purpose'                => 'Účel',
                'purpose_comment'        => 'Popíšte účel použitia na každej granulovanej úrovni jedným odsekom. Článok 5 vyžaduje aby bol súhlas vyžiadaný v granulárnom štýle pre \'špecifické, explicitné\' účely.',
                'expiry'                 => 'Trvanie/Expirácia',
                'expiry_comment'         => 'Podľa zákona ePrivacy musíte uviesť ako dlho budú uložené v užívateľovom prehliadači napr. SESSION, 3 mesiace, 2 roky.',
                'type'                   => 'Typ',
                'type_comment'           => 'Podľa zákona ePrivacy musíte uviesť o aký typ cookies alebo modul ide, pre uľahčenie sme vytvorili drop=down menu',
            ],
        ],
        'tabs'   => [
            'contact'      => 'Kontaktné informácie',
            'levels'       => 'Správa úrovní',
            'provider'     => 'Poskytovateľ',
            'item_details' => 'Správa detailov položky',
        ],
    ],
    'permissions'     => [
        'manage_cookie_consent' => 'Môže spravovať nastavenie cookie súhlasu',
        'manage_data_retention' => 'Môže spravovať uchovávanie údajov',
        'manage_cookie_groups'  => 'Môže spravovať skupiny cookies',
    ],
];
