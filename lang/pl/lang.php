<?php

return [
    'plugin' => [
        'name'        => 'RODO i ePrivacy',
        'description' => 'Spraw, aby Twoja strona była zgodna z RODO oraz ePrivacy.',
    ],
    'common' => [
        'enabled' => 'Włączone',
        'disabled' => 'Wyłączone',
        'sorted' => 'Kolejność została zmieniona',
        'save_settings' => 'Zapisz ustawienia',
        'contact_details' => 'Szczegóły kontaktu',
        'links' => 'Odnośniki'
    ],
    'cookie_banner'   => [
        'description' => 'Wyświetla baner z informacją o ciasteczkach',
        'message'             => 'Używamy plików cookie w celu zapewnienia najlepszej jakości usług. Kontynuując, wyrażasz zgodę na korzystanie z plików cookie.',
        'advanced_settings'   => 'Ustawienia zaawansowane',
        'decline'             => 'Nie zgadzam się',
        'accept'              => 'Zgadzam się',
        'include_css' => [
            'title' => 'Dołącz CSS',
            'description' => 'Dołącz domyślne style dla tego komponentu.'
        ],
        'include_js' => [
            'title' => 'Dołącz JS',
            'description' => 'Dołącz domyślne skrypty dla tego komponentu.'
        ],
        'update_partial' => [
            'title' => 'Fragment do dynamicznego przeładowania',
            'description' => 'Ten fragment będzie przeładowany gdy użytkownik zaakceptuje ciasteczka.'
        ],
        'update_selector' => [
            'title' => 'Selektor CSS do dynamicznego przeładowania',
            'description' => 'Fragment będzie załadowany do tego elementu.'
        ],
        'cookie_manager_page' => [
            'title' => 'Strona ustawień zaawansowanych',
            'description' => 'Umieść komponent cookieManager na tej stronie',
            'empty' => 'Brak ustawień zaawansowanych'
        ]
    ],
    'cookie_manager' => [
        'description' => 'Wyświetla formularz przeglądu i edycji wszystkich ciasteczek zdefiniowanych w backendzie.',
        'expiry' => [
            3 => 'Zapytaj ponownie za 3 miesiące',
            6 => 'Zapytaj ponownie za 6 miesięcy',
            12 => 'Zapytaj ponownie za rok',
            24 => 'Zapytaj ponownie za 2 lata',
            36 => 'Zapytaj ponownie za 3 lata',
        ]
    ],
    'consent_manager' => [
        'description' => 'Dołącza Klaro! Consent Manger',
        'include_assets' => [
            'title' => 'Dołącz pliki',
            'description' => 'Dołącz automatycznie potrzebne pliki JS'
        ],
        'style_prefix' => [
            'title' => 'Prefiks CSS',
            'description' => 'Użyj tej klasy CSS w kodzie HTML Klaro! (usuwa domyślny styl)'
        ]
    ],
    'settings' => [
        'cookies' => [
            'label' => 'Ciasteczka i Moduły',
            'description' => 'Zarządzanie ciasteczkami i modułami'
        ],
        'cookie_consent' => [
            'label' => 'Zgoda na ciasteczka',
            'description' => 'Skonfiguruj Klaro!',
            'cookie_expires_after_days' => [
                'label' => 'Czas życia ciasteczka',
                'comment' => 'Ustawienia użytkownika są przechowywane przez tyle dni.'
            ],
            'privacy_policy' => [
                'label' => 'Polityka prywatności',
                'comment' => 'Względna lub bezwzględna ścieżka do Twojej polityki prywatności.'
            ],
            'default_application_state' => [
                'label' => 'Domyślny stan aplikacji',
                'comment' => 'Domyślnie wyraź zgodę dla wszystkich aplikacji'
            ],
            'must_consent' => [
                'label' => 'Wymuszenie zgody',
                'comment' => 'Wyświetl menedżera bezpopśrednio na pierwszej stronie, aby wymusić decyzję użytkownika.'
            ],
            'lang' => [
                'label' => 'Kod języka',
                'comment' => 'Znajdziesz wszystkie dostępne kody w dokumentacji Klaro!'
            ],
            'tabs' => [
                'translations' => 'Tłumaczenia',
                'apps' => 'Aplikacje',
                'general' => 'Ogólne'
            ],
            'translations' => [
                'repeater' => [
                    'code' => [
                        'label' => 'Kod języka'
                    ],
                    'json' => [
                        'label' => 'JSON'
                    ]
                ]
            ],
            'apps' => [
                'repeater' => [
                    'name' => [
                        'label' => 'Nazwa',
                        'comment' => 'Prosta i krótka nazwa dla tej aplikacji (np. google-analytics)'
                    ],
                    'application_state' => [
                        'label' => 'Domyślnie włączone',
                        'comment' => 'Domyślnie włącz aplikację. Nadpisuje ustawienia globalne'
                    ],
                    'required' => [
                        'label' => 'Zgoda jest wymagana',
                        'comment' => 'Ta aplikacja nie może być wyłączona'
                    ],
                    'opt_out' => [
                        'label' => 'Rezygnacja',
                        'comment' => 'Skrypty tej aplikacji są ładowane przy pierwszym wyświetleniu strony bez zgody użytkownika'
                    ],
                    'only_once' => [
                        'label' => 'Ładuj skrypty tylko raz',
                        'comment' => 'Skrypty tej aplikacji będą załadowane tylko raz, nawet jeśli użytkownik włączy ją ponownie, nawet kilka razy'
                    ],
                    'title' => [
                        'label' => 'Tytuł',
                        'comment' => 'Nazwa wyświetlana (np. Google Analytics)'
                    ],
                    'purposes' => [
                        'label' => 'Cele',
                        'comment' => 'Cele te muszą zostać przetłumaczone w sekcji Tłumaczenia. (np. analytics, user-tracking)'
                    ],
                    'cookies' => [
                        'label' => 'Ciasteczka',
                        'comment' => 'Nazwa ciasteczek bądź wyrażenie regularne. Te ciasteczka są automatycznie usuwane, jeżeli użytkownik wyłączy aplikację. (np. /^_ga_.*$/ or custom_tracker_cookie)'
                    ],
                    'callback' => [
                        'label' => 'Callback',
                        'comment' => 'Ta funkcja będzie wywołana zawsze, gdy użytkownik włączy tą aplikację.<br /><pre><small>function (consent, app) { // ... }</small></pre>'
                    ]
                ]
            ]
        ],
        'data_retention' => [
            'label' => 'Przechowywanie danych',
            'description' => 'Skonfiguruj zasady przechowywania danych',
            'enabled' => [
                'label' => 'Automatyczne czyszczenie',
                'comment' => 'Automatycznie usuń dane po określonym czasie'
            ],
            'default_keep_days' => [
                'label' => 'Usuń dane po określonej ilości dni',
                'comment' => 'Obowiązuje dla wszystkich zarejestrowanych wtyczek, jeżeli poniżej nie podano inaczej'
            ],
            'keep_days' => [
                'label' => 'Usuń dane po określonej ilości dni'
            ]
        ],
    ],
    'cookie_group' => [
        'fields' => [
            'name' => 'Grupa',
            'initial_status' => 'Włączone przy uruchomieniu',
            'initial_status_comment' => 'Włączy grupę podczas uruchamiania. Należy pamiętać, że e-Privacy wymaga, aby wiele elementów było domyślnie wyłączone.',
            'required' => 'Wymagane do prawidłowego działania strony',
            'required_comment' => 'Te ciasteczka i/lub moduły są wymagane do prawidłowego działania strony i z tego powodu nie mogą być wyłączone przez użytkownika',
            'slug' => 'Pole numeru strony (Slug)',
            'default_level' => 'Wstępnie wybrany poziom dla użytkownika'
        ],
        'tabs' => [
            'description' => 'Opis',
            'cookies' => 'Ciasteczka',
        ],
    ],
    'cookie' => [
        'fields' => [
            'name_owner' => 'Właściciel',
            'name_owner_comments' => 'Nazwa właściciela usługi (np. Google Analytics)',
            'code' => 'Kod',
            'code_comment' => 'Kod jest generowany w celu poprawnego działania wtyczki. (Nie potrzebujesz tego zmieniać)',
            'initial_status' => 'To ciasteczko jest domyślnie włączone',
            'levels' => 'Poziomy ciasteczek',
            'item_details' => 'Szczegóły',
            'purpose' => 'Cel',
            'purpose_comment' => 'Zgodnie z ustawą o prywatności i łączności elektronicznej (art. 4 ust. 11 i art. 13 ust. 1, C i ust. 2, F) musisz opisać cel użytkowania i wszelkich powiadomień, np. "Te ciasteczka są używane przez widget społecznościowy AddThis, aby mieć pewność że zobaczysz aktualną liczbę podczas udostępniania strony".',
            'contact_details_dpo' => 'Dane kontaktowe administratora danych',
            'contact_details_dpo_comment' => 'Zgodnie z ustawą o prywatności i łączności elektronicznej (art. 13 ust. 1, A i motyw 42) musisz podać adres kontaktowy inspektora ochrony danych, np. np. Cloudflare, Inc. 101 Townsend St. San Francisco, Kalifornia 94107. Uwaga: Inspektor ochrony danych: privacyquestions@cloudflare.com (Pamiętaj, adres e-mail jest opcjonalny).',
            'contact_links_dpo' => 'Odnośniki kontaktowe administratora danych',
            'contact_links_dpo_comment' => 'Zgodnie z ustawą o prywatności i łączności elektronicznej (art. 13 ust. 2, B, C i D) należy podać odnośniki do „prawa do złożenia skargi do organu nadzorczego i dostępu do prawidłowej polityki danych”, co oznacza odnośnik do polityki prywatności, regulaminu, polityki ciasteczek, oraz stron rezygnacji, jeżeli aplikacja takie posiada.',
            'contact_links_dpo_prompt' => 'Dodaj nowy odnośnik',
            'contact_links' => [
                'name' => 'Tekst odnośnika',
                'href' => 'Adres URL (absolutny)'
            ],
            'cookie_levels' => [
                'purpose_prompt' => 'Dodaj poziomy celów szczegółowych',
                'purpose_label' => 'Poziomy celów szczegółowych',
                'section1_label' => 'Pomocna wskazówka dla poziomów celów szczegółowych',
//                'section1_comment' => '',
                'section2_label' => 'Pomocna wskazówka dla szczegółow',
//                'section2_comment' => '',
                'identification' => 'Nazwa (Identyfikator ciasteczka)',
                'identification_comment' => 'Kod prefiksu ciasteczka. Np. "_ga"',
                'provider' => 'Dostawca',
                'provider_comment' => 'Zgodnie z ustawą o prywatności i łączności elektronicznej musisz podać nazwę domeny internetowej. Nie podawaj protokułu (http://, https://) oraz ukośnika (/) na końcu.',
                'purpose' => 'Cel',
                'purpose_comment' => 'Opisz cel zastosowania ciasteczka na każdym poziomie szczegółowości po jeden akapit na poziom. Zgodnie z art. 5 wniosek o udzielenie zgody jest podawany w sposób szczegółowy w "określonych, wyraźnych" celach.',
                'expiry' => 'Czas trwania',
                'expiry_comment' => 'Zgodnie z ustawą o prywatności i łączności elektronicznej musisz określić jak długo ciasteczko będzie używane w przeglądarce użytkownika. Np. SESJA, 3 miesiące, 2 lata.',
                'type' => 'Rodzaj',
                'type_comment' => 'Zgodnie z ustawą o prywatności i łączności elektronicznej musisz określić rodzaj ciasteczka lub modułu. Aby Ci to ułatwić stworzyliśmy listę rozwilajną.'
            ]
        ],
        'tabs' => [
            'contact' => 'Dane kontaktowe',
            'levels' => 'Zarządzaj poziomami',
            'provider' => 'Dostawca',
            'item_details' => 'Zarządzaj szczegółami'
        ]
    ],
    'permissions' => [
        'manage_cookie_consent' => 'Zarządzaj ustawieniami polityki ciasteczek',
        'manage_data_retention' => 'Zarządzaj polityką przechowywania danych',
        'manage_cookie_groups' => 'Zarządzaj grupami ciasteczek'
    ]
];
