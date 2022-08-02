<?php return [
    'plugin' => [
        'name' => 'GDPR és ePrivacy',
        'description' => 'Tegye webhelyét GDPR- és ePrivacy-kompatibilissé',
    ],
    'common' => [
        'enabled' => 'Engedélyezve',
        'disabled' => 'Letiltva',
        'sorted' => 'Sorrend sikeresen frissítve',
        'save_settings' => 'Beállítások mentése',
        'contact_details' => 'Kapcsolati adatok',
        'links' => 'Hivatkozások',
    ],
    'cookie_banner' => [
        'description' => 'Cookie banner megjelenítése',
        'message' => 'A tartalom személyre szabásához és a weboldal forgalom elemzéséhez sütiket használunk.',
        'advanced_settings' => 'További beállítások',
        'decline' => 'Elutasít',
        'accept' => 'Elfogad',
        'include_css' => [
            'title' => 'CSS hozzáadása',
            'description' => 'Alapértelmezett stílus fájlok beszúrása a komponenshez',
        ],
        'include_js' => [
            'title' => 'JS hozzáadása',
            'description' => 'Alapértelmezett szkript fájlok beszúrása a komponenshez',
        ],
        'update_partial' => [
            'title' => 'Partial az oldal újratöltéséhez',
            'description' => 'Ez a partial fog betöltőtni, amikor a felhasználó elfogadja a feltételeket',
        ],
        'update_selector' => [
            'title' => 'CSS selector az oldal újratöltéséhez',
            'description' => 'A partial ebbe az elembe fog betöltődni',
        ],
        'cookie_manager_page' => [
            'title' => 'Süti részletek oldal a további speciál beállításokhoz',
            'description' => 'Az az oldal, ahol a cookieManager komponens elhelyezésre kerül',
            'empty' => 'Speciális beállítások nélkül',
        ],
        'deferred' => [
            'title' => 'Halasztás',
            'description' => 'A süti kezelő csak akkor töltődik be, ha az onRenderCookieManager metódus explicit módon kerül meghívásra',
        ],
    ],
    'cookie_manager' => [
        'description' => 'Áttekintési és szerkesztési felületet jelenít meg a háttérbeállításokban megadott összes sütihez',
        'expiry' => [
            3 => 'Kérdezzen meg újra 3 hónap múlva',
            6 => 'Kérdezzen meg újra 6 hónap múlva',
            12 => 'Kérdezzen meg újra 1 év múlva',
            24 => 'Kérdezzen meg újra 2 év múlva',
            36 => 'Kérdezzen meg újra 3 év múlva',
        ],
    ],
    'consent_manager' => [
        'description' => 'Tartalmazza a Klaro! Consent Managert',
        'include_assets' => [
            'title' => 'Kiegészítők betöltése',
            'description' => 'Az összes szüskéges JS kiegészítő automatikus betöltése',
        ],
        'style_prefix' => [
            'title' => 'CSS prefix',
            'description' => 'Használja a megadott CSS osztályt a Klaro! HTML sémában (alapértelmezett stílusok eltávolítása)',
        ],
    ],
    'settings' => [
        'cookies' => [
            'label' => 'Sütik és Modulok',
            'description' => 'Süti és Modul Management',
        ],
        'general' => [
            'label' => 'Általános beállítások',
            'description' => 'GDPR bővítmény beállítása',
            'log_enabled' => [
                'label' => 'Süti kérések logolása',
                'comment' => 'Felhasználói süti kérések és döntések logolása',
            ],
            'ignore_useragents' => [
                'label' => 'User agent ignorálás',
                'comment' => 'User agent kérések ne kerüljenek logolásra',
            ],
        ],
        'cookie_consent' => [
            'label' => 'Süti hozzájárulás',
            'description' => 'Klaro! Manager beállítások',
            'cookie_expires_after_days' => [
                'label' => 'Süti élettartama napokban megadva',
                'comment' => 'A felhasználói beállítások mennyi időre (napra) legyenek elmentve',
            ],
            'privacy_policy' => [
                'label' => 'Adatvédelmi irányelvek',
                'comment' => 'Relatív vagy abszolút hivatkozás az adatvédelmi szabályzatra',
            ],
            'default_application_state' => [
                'label' => 'Az alkalmazás alapértelmezett állapota',
                'comment' => 'Alapértelmezés szerint engedélyezze a hozzájárulást az összes alkalmazáshoz',
            ],
            'must_consent' => [
                'label' => 'Kötelező hozzájárulás',
                'comment' => 'Jelenítse meg a süti kezelőt közvetlenül az első oldal (kezdőlap) nézetében, hogy a felhasználóból döntést kényszerítsen',
            ],
            'lang' => [
                'label' => 'Nyelvi kód',
                'comment' => 'Az összes elérhető nyelvi kód megtaláható Klaro! dokumentációjában',
            ],
            'tabs' => [
                'translations' => 'Fordítások',
                'apps' => 'Applikációk',
                'general' => 'Általános',
            ],
            'translations' => [
                'repeater' => [
                    'code' => [
                        'label' => 'Nyelvi kód',
                    ],
                    'json' => [
                        'label' => 'JSON',
                    ],
                ],
            ],
            'apps' => [
                'repeater' => [
                    'name' => [
                        'label' => 'Név',
                        'comment' => 'Egy egyszerű és rövid név ennek az alkalmazásnak (pl. google-analytics)',
                    ],
                    'application_state' => [
                        'label' => 'Alapértelmezetten engedélyezve',
                        'comment' => 'Alapértelmezés szerint engedélyezze ezt az alkalmazást. Ez felülírja a globális beállításokat.',
                    ],
                    'required' => [
                        'label' => 'Hozzájárulás kötelező',
                        'comment' => 'Ez az alkalmazás nem tiltható le.',
                    ],
                    'opt_out' => [
                        'label' => 'Opt-out',
                        'comment' => 'Ennek az alkalmazásnak a szkriptjei az első oldal nézetében betöltődnek anélkül, hogy a látogató beleegyezne.',
                    ],
                    'only_once' => [
                        'label' => 'Csak egyszer töltse be a szkriptet',
                        'comment' => 'Ennek az alkalmazásnak a szkriptjei csak egyszer töltődnek be, még akkor is, ha a látogató többször engedélyezi.',
                    ],
                    'title' => [
                        'label' => 'Cím',
                        'comment' => 'Megjelenítési név (pl. Google Analytics)',
                    ],
                    'purposes' => [
                        'label' => 'Célok',
                        'comment' => 'Ezeket a célokat le kell fordítani a fordítások részben. (pl. elemzés, felhasználókövetés)',
                    ],
                    'cookies' => [
                        'label' => 'Az alkalmazás cookie-jai',
                        'comment' => 'Cookie-nevek karakterlánca vagy reguláris kifejezése. Ezek a cookie-k automatikusan törlődnek, ha a felhasználó letiltja ezt az alkalmazást. (pl. /^_ga_.*$/ vagy custom_tracker_cookie)',
                    ],
                    'callback' => [
                        'label' => 'Visszahívás funkció',
                        'comment' => 'Ez a JavaScript-függvény mindig meghívásra kerül, amikor a felhasználó engedélyezi ezt az alkalmazást.<br /><pre><small>függvény (beleegyezés, alkalmazás) { // ... }</small></pre>',
                    ],
                ],
            ],
        ],
        'data_retention' => [
            'label' => 'Adatmegrőzés',
            'description' => 'Konfigurálja az adatmegőrzési házirendeket',
            'enabled' => [
                'label' => 'Adat tisztítás engedélyezve',
                'comment' => 'A régi adatok automatikusan törlésre kerülnek lejártuk után',
            ],
            'default_keep_days' => [
                'label' => 'Az adatok törlése napok után',
                'comment' => 'Minden regisztrált bővítményre érvényes, ha nincs más megadva alul',
            ],
            'keep_days' => [
                'label' => 'Az adatok törlése napok után',
            ],
        ],
        'info' => [
            'label' => 'Info és Sugó',
            'description' => 'Információ és segítség a beállításhoz',
            'bannerlaws_title' => 'Az egyes országokra vonatkozó bannertörvények',
            'cookieconsent_title' => 'Sütikhez való hozzájárulás használati útmutatója',
            'cookiesmodulessetup_title' => 'Példa a süti-k és modulok beállítására',
            'cookiesmodulesuserguide_title' => 'Süti-k és modulok használati útmutatója',
            'dataretention_title' => 'Adatmegőrzés felhasználói kézikönyv',
            'dpolinks_title' => 'Kapcsolatfelvételi hivatkozások a leggyakoribb süti-k adatvédelmi tisztviselőjéhez',
            'overallinfo_title' => 'Információk a GDPR-ról és az elektronikus hírközlési adatvédelemről',
            'index_title' => 'Üdvözli az OctoberCMS GDPR és az ePrivacy Bővítmény',
        ],
    ],
    'cookie_group' => [
        'fields' => [
            'name' => 'Csoport neve',
            'initial_status' => 'Indításkor bekapcsolták',
            'initial_status_comment' => 'Ez beállítja, hogy az elem engedélyezve legyen indításkor. Felhívjuk figyelmét, hogy az ilyen beállítások legtöbb esetben alapértelmezetten tiltva vannak',
            'required' => 'A webhely működéséhez szükséges',
            'required_comment' => 'Az ebbe a csoportba tartozó sütikre és/vagy modulokra a webhely megfelelő működéséhez van szükség, ezért ezeket a felhasználó nem tilthatja le.',
            'slug' => 'URL',
            'default_level' => 'Ez a beállítás előre be van állítva a felhasználó számára',
        ],
        'tabs' => [
            'description' => 'Leírás',
            'cookies' => 'Sütik',
        ],
    ],
    'cookie' => [
        'fields' => [
            'name_owner' => 'Tulajdonos',
            'name_owner_comment' => 'Szolgáltatás tulajdonosának a neve, pl. A Google Analytics',
            'code' => 'Kód',
            'code_comment' => 'Automatikusan kerül kigenerálásra a bővítmény működéséhez, nincs teendő vele',
            'intial_status' => 'Ez a süti alapértelmezetten engedélyezve van',
            'levels' => 'Süti szintek',
            'item_details' => 'Tétel részletei',
            'purpose' => 'Cél',
            'purpose_comment' => 'Az elektronikus hírközlési adatvédelmi törvény (4. cikk (11) bekezdés és 13. cikk (1) bekezdés C. és 2. bekezdés F) pontja értelmében Önnek le kell írnia a felhasználás célját, a feldolgozást és az értesítéseket.',
            'contact_details_dpo' => 'Adatkezelő elérhetőségei',
            'contact_details_dpo_comment' => 'Az elektronikus hírközlési adatvédelmi törvény értelmében (13. cikk (1) bekezdés A. és (42) preambulumbekezdés) meg kell adnia az adatvédelmi tisztviselő kapcsolattartási címét, pl. Cloudflare, Inc. 101 Townsend St. San Francisco, CA 94107. Figyelem: Adatvédelmi tisztviselő, privacyquestions@cloudflare.com (kérjük, vegye figyelembe, hogy az e-mail cím megadása nem kötelező)',
            'contact_links_dpo' => 'Az Adatkezelő elérhetőségei',
            'contact_links_dpo_comment' => 'Az elektronikus hírközlési adatvédelmi törvény (13. cikk, 2. bekezdés, B, C és D) értelmében meg kell adnia a „felügyelő hatósághoz benyújtott panaszhoz és a megfelelő adatkezelési szabályzathoz való hozzáférés jogához” a hivatkozásokat a felhasználó tájékoztatásához.',
            'contact_links_dpo_prompt' => 'Új hivatkozás hozzáadása',
            'contact_links' => [
                'name' => 'Horgonyszöveg',
                'href' => 'Cél URL (abszolút URL)',
            ],
            'cookie_levels' => [
                'purpose_prompt' => 'Granuláris célú szintek hozzáadása',
                'purpose_label' => 'Granuláris célú szintek',
                'section1_label' => 'Hasznos tipp a Granuláris célú szintekhez',
                'section1_comment' => 'Az elektronikus hírközlési adatvédelmi törvény (32. preambulumbekezdés és a 29. cikk szerinti munkacsoport-iránymutatás, 2017. nov.) értelmében használjon részletes engedélyezési folyamatot a szintkezelési funkciónkkal. Ez azt jelenti, hogy van egy kikapcsolt, majd egy alapbeállítás, majd egy fejlettebb beállítás és így tovább egészen a teljes beállításig. Példa erre a Google Analytics, ahol van egy Off beállítás, majd egy alapkövetési beállítás, majd egy alapkövetési beállítás plusz beépülő modulok, végül egy teljes beállítás mindennel. A szintek száma attól függ, hogy mit ad hozzá.',
                'section2_label' => 'Hasznos tipp a tétel részleteihez',
                'section2_comment' => 'Tetszőleges számú elemrészletet felsorolhat, ha ez egy sütire tartozik, győződjön meg róla, hogy felsorolja az összes süti azonosító nevet, például a Google Analytics 8 vagy több különböző nevet tartalmazhat. Győződjön meg arról is, hogy azonos számú Név (süti-azonosító), Időtartam/Lejárat és Típus mezőket tartalmaz. A Google Chrome webhely cookie-jainak listáját a Fejlesztői eszközök > Alkalmazás > Cookie-k menüpontban találhatja meg. A cookie-k megkereséséhez használhatja a https://cookiepedia.co.uk/ weboldalt is.',
                'name' => 'Név',
                'identification' => 'Név (Süti azonosítás)',
                'identification_comment' => 'Süti prefix kód neve pl. \'_ga\'',
                'provider' => 'Szolgáltató',
                'provider_comment' => 'Az elektronikus hírközlési adatvédelmi törvény értelmében meg kell adnia a webhely domain nevét. (Ne adja meg https://, www előtagokat és / az URL végéről)',
                'purpose' => 'Cél',
                'purpose_comment' => 'Egyetlen bekezdésben írja le a felhasználás célját minden Granuláris szinten. Az 5. cikk előírja, hogy a hozzájárulást részletesen, \"meghatározott, kifejezett\" célokra kell kérni.',
                'expiry' => 'Időtartam/Lejárat',
                'expiry_comment' => 'Az elektronikus hírközlési adatvédelmi törvény értelmében meg kell adni, hogy mennyi ideig lesz használatban a felhasználói böngészőben, pl. SESSION, 3 hónap, 2 év.',
                'type' => 'Típus',
                'type_comment' => 'Az elektronikus hírközlési adatvédelmi törvény értelmében meg kell adnia, hogy milyen típusú süti vagy modul, hogy megkönnyítsük a dolgát, létrehoztunk egy legördülő menüt.',
            ],
        ],
        'tabs' => [
            'contact' => 'Elérhetőség',
            'levels' => 'Szintek kezelése',
            'provider' => 'Szolgáltató',
            'item_details' => 'Tétel részleteinek kezelése',
        ],
    ],
    'permissions' => [
        'manage_cookie_consent' => 'Kezelheti a süti-k hozzájárulásának beállításait',
        'manage_data_retention' => 'Kezelheti az adatmegőrzési beállításokat',
        'manage_cookie_groups' => 'Kezelheti a cookie-csoportokat',
        'manage_logs' => 'Megtekintheti a süti napló adatokat',
    ],
    'log' => [
        'session_id' => 'Session ID',
        'visited' => 'Látogatott',
        'decided' => 'Eldöntött',
        'decision' => 'Döntés',
        'undecided' => 'Nem eldöntött',
        'accepted' => 'Elogadott',
        'declined' => 'Elutasított',
        'total' => 'Teljes',
        'total_logged' => 'Naplózott kérések',
        'log' => 'Süti log',
        'log_comment' => 'Régi naplóbejegyzések eltávolítása',
    ],
];