<?php
return [
    "common" => [
        "contact_details" => "Szczegóły kontaktu",
        "disabled" => "Wyłączone",
        "enabled" => "Włączone",
        "links" => "Odnośniki",
        "save_settings" => "Zapisz ustawienia",
        "sorted" => "Kolejność została zmieniona"
    ],
    "consent_manager" => [
        "description" => "Dołącza Klaro! Consent Manger",
        "include_assets" => [
            "description" => "Dołącz automatycznie potrzebne pliki JS",
            "title" => "Dołącz pliki"
        ],
        "style_prefix" => [
            "description" => "Użyj tej klasy CSS w kodzie HTML Klaro! (usuwa domyślny styl)",
            "title" => "Prefiks CSS"
        ]
    ],
    "cookie" => [
        "fields" => [
            "code" => "Kod",
            "code_comment" => "Kod jest generowany w celu poprawnego działania wtyczki. (Nie potrzebujesz tego zmieniać)",
            "contact_details_dpo" => "Dane kontaktowe administratora danych",
            "contact_details_dpo_comment" => "Zgodnie z ustawą o prywatności i łączności elektronicznej (art. 13 ust. 1, A i motyw 42) musisz podać adres kontaktowy inspektora ochrony danych, np. np. Cloudflare, Inc. 101 Townsend St. San Francisco, Kalifornia 94107. Uwaga: Inspektor ochrony danych: privacyquestions@cloudflare.com (Pamiętaj, adres e-mail jest opcjonalny).",
            "contact_links" => ["href" => "Adres URL (absolutny)", "name" => "Tekst odnośnika"],
            "contact_links_dpo" => "Odnośniki kontaktowe administratora danych",
            "contact_links_dpo_comment" => "Zgodnie z ustawą o prywatności i łączności elektronicznej (art. 13 ust. 2, B, C i D) należy podać odnośniki do „prawa do złożenia skargi do organu nadzorczego i dostępu do prawidłowej polityki danych”, co oznacza odnośnik do polityki prywatności, regulaminu, polityki ciasteczek, oraz stron rezygnacji, jeżeli aplikacja takie posiada.",
            "contact_links_dpo_prompt" => "Dodaj nowy odnośnik",
            "cookie_levels" => [
                "expiry" => "Czas trwania",
                "expiry_comment" => "Zgodnie z ustawą o prywatności i łączności elektronicznej musisz określić jak długo ciasteczko będzie używane w przeglądarce użytkownika. Np. SESJA, 3 miesiące, 2 lata.",
                "identification" => "Nazwa (Identyfikator ciasteczka)",
                "identification_comment" => "Kod prefiksu ciasteczka. Np. \"_ga\"",
                "name" => "imię",
                "provider" => "Dostawca",
                "provider_comment" => "Zgodnie z ustawą o prywatności i łączności elektronicznej musisz podać nazwę domeny internetowej. Nie podawaj protokułu (http://, https://) oraz ukośnika (/) na końcu.",
                "purpose" => "Cel",
                "purpose_comment" => "Opisz cel zastosowania ciasteczka na każdym poziomie szczegółowości po jeden akapit na poziom. Zgodnie z art. 5 wniosek o udzielenie zgody jest podawany w sposób szczegółowy w \"określonych, wyraźnych\" celach.",
                "purpose_label" => "Poziomy celów szczegółowych",
                "purpose_prompt" => "Dodaj poziomy celów szczegółowych",
                "section1_comment" => "Zgodnie z ustawą o e-prywatności (motyw 32 i wytyczne grupy roboczej na podstawie art. 29, listopad 2017 r.), Użyj szczegółowego procesu wyrażania zgody z naszą funkcją zarządzania poziomami. Oznacza to ustawienie wyłączone, następnie ustawienie podstawowe, następnie ustawienie bardziej zaawansowane i tak dalej, aż do pełnego ustawienia. Przykładem może być Google Analytics, w którym mamy ustawienie wyłączenia, następnie podstawowe ustawienie śledzenia, następnie podstawowe ustawienie śledzenia plus wtyczki, a na koniec pełne ustawienie ze wszystkim. Liczba poziomów zależy od tego, co dodajesz.",
                "section1_label" => "Pomocna wskazówka dla poziomów celów szczegółowych",
                "section2_comment" => "Możesz podać tyle szczegółów przedmiotu, ile chcesz, jeśli jest to plik cookie, upewnij się, że wymieniono wszystkie nazwy identyfikacyjne plików cookie, na przykład Google Analytics może mieć 8 lub więcej różnych. Upewnij się także, że masz taką samą liczbę pól Nazwa (Identyfikacja pliku cookie), Czas trwania / Wygaśnięcia i Typ. Aby znaleźć listę plików cookie witryny w Google Chrome, przejdź do Narzędzia dla programistów> Aplikacja> Pliki cookie. Możesz także użyć strony internetowej: https://cookiepedia.co.uk/ do wyszukiwania plików cookie.",
                "section2_label" => "Pomocna wskazówka dla szczegółow",
                "type" => "Rodzaj",
                "type_comment" => "Zgodnie z ustawą o prywatności i łączności elektronicznej musisz określić rodzaj ciasteczka lub modułu. Aby Ci to ułatwić stworzyliśmy listę rozwilajną."
            ],
            "initial_status" => "To ciasteczko jest domyślnie włączone",
            "intial_status" => "Ten plik cookie jest domyślnie włączony",
            "item_details" => "Szczegóły",
            "levels" => "Poziomy ciasteczek",
            "name_owner" => "Właściciel",
            "name_owner_comment" => "Nazwa właściciela usługi, np. Google Analytics",
            "name_owner_comments" => "Nazwa właściciela usługi (np. Google Analytics)",
            "purpose" => "Cel",
            "purpose_comment" => "Zgodnie z ustawą o prywatności i łączności elektronicznej (art. 4 ust. 11 i art. 13 ust. 1, C i ust. 2, F) musisz opisać cel użytkowania i wszelkich powiadomień, np. \"Te ciasteczka są używane przez widget społecznościowy AddThis, aby mieć pewność że zobaczysz aktualną liczbę podczas udostępniania strony\"."
        ],
        "tabs" => [
            "contact" => "Dane kontaktowe",
            "item_details" => "Zarządzaj szczegółami",
            "levels" => "Zarządzaj poziomami",
            "provider" => "Dostawca"
        ]
    ],
    "cookie_banner" => [
        "accept" => "Zgadzam się",
        "advanced_settings" => "Ustawienia zaawansowane",
        "cookie_manager_page" => [
            "description" => "Umieść komponent cookieManager na tej stronie",
            "empty" => "Brak ustawień zaawansowanych",
            "title" => "Strona ustawień zaawansowanych"
        ],
        "decline" => "Nie zgadzam się",
        "description" => "Wyświetla baner z informacją o ciasteczkach",
        "include_css" => [
            "description" => "Dołącz domyślne style dla tego komponentu.",
            "title" => "Dołącz CSS"
        ],
        "include_js" => [
            "description" => "Dołącz domyślne skrypty dla tego komponentu.",
            "title" => "Dołącz JS"
        ],
        "message" => "Używamy plików cookie w celu zapewnienia najlepszej jakości usług. Kontynuując, wyrażasz zgodę na korzystanie z plików cookie.",
        "update_partial" => [
            "description" => "Ten fragment będzie przeładowany gdy użytkownik zaakceptuje ciasteczka.",
            "title" => "Fragment do dynamicznego przeładowania"
        ],
        "update_selector" => [
            "description" => "Fragment będzie załadowany do tego elementu.",
            "title" => "Selektor CSS do dynamicznego przeładowania"
        ]
    ],
    "cookie_group" => [
        "fields" => [
            "default_level" => "Wstępnie wybrany poziom dla użytkownika",
            "initial_status" => "Włączone przy uruchomieniu",
            "initial_status_comment" => "Włączy grupę podczas uruchamiania. Należy pamiętać, że e-Privacy wymaga, aby wiele elementów było domyślnie wyłączone.",
            "name" => "Grupa",
            "required" => "Wymagane do prawidłowego działania strony",
            "required_comment" => "Te ciasteczka i/lub moduły są wymagane do prawidłowego działania strony i z tego powodu nie mogą być wyłączone przez użytkownika",
            "slug" => "Pole numeru strony (Slug)"
        ],
        "tabs" => ["cookies" => "Ciasteczka", "description" => "Opis"]
    ],
    "cookie_manager" => [
        "description" => "Wyświetla formularz przeglądu i edycji wszystkich ciasteczek zdefiniowanych w backendzie.",
        "expiry" => [
            "3" => "Zapytaj ponownie za 3 miesiące",
            "6" => "Zapytaj ponownie za 6 miesięcy",
            "12" => "Zapytaj ponownie za rok",
            "24" => "Zapytaj ponownie za 2 lata",
            "36" => "Zapytaj ponownie za 3 lata"
        ]
    ],
    "permissions" => [
        "manage_cookie_consent" => "Zarządzaj ustawieniami polityki ciasteczek",
        "manage_cookie_groups" => "Zarządzaj grupami ciasteczek",
        "manage_data_retention" => "Zarządzaj polityką przechowywania danych"
    ],
    "plugin" => [
        "description" => "Spraw, aby Twoja strona była zgodna z RODO oraz ePrivacy.",
        "name" => "RODO i ePrivacy"
    ],
    "settings" => [
        "cookie_consent" => [
            "apps" => [
                "repeater" => [
                    "application_state" => [
                        "comment" => "Domyślnie włącz aplikację. Nadpisuje ustawienia globalne",
                        "label" => "Domyślnie włączone"
                    ],
                    "callback" => [
                        "comment" => "Ta funkcja będzie wywołana zawsze, gdy użytkownik włączy tą aplikację.<br /><pre><small>function (consent, app) { // ... }</small></pre>",
                        "label" => "Callback"
                    ],
                    "cookies" => [
                        "comment" => "Nazwa ciasteczek bądź wyrażenie regularne. Te ciasteczka są automatycznie usuwane, jeżeli użytkownik wyłączy aplikację. (np. /^_ga_.*\$/ or custom_tracker_cookie)",
                        "label" => "Ciasteczka"
                    ],
                    "name" => [
                        "comment" => "Prosta i krótka nazwa dla tej aplikacji (np. google-analytics)",
                        "label" => "Nazwa"
                    ],
                    "only_once" => [
                        "comment" => "Skrypty tej aplikacji będą załadowane tylko raz, nawet jeśli użytkownik włączy ją ponownie, nawet kilka razy",
                        "label" => "Ładuj skrypty tylko raz"
                    ],
                    "opt_out" => [
                        "comment" => "Skrypty tej aplikacji są ładowane przy pierwszym wyświetleniu strony bez zgody użytkownika",
                        "label" => "Rezygnacja"
                    ],
                    "purposes" => [
                        "comment" => "Cele te muszą zostać przetłumaczone w sekcji Tłumaczenia. (np. analytics, user-tracking)",
                        "label" => "Cele"
                    ],
                    "required" => [
                        "comment" => "Ta aplikacja nie może być wyłączona",
                        "label" => "Zgoda jest wymagana"
                    ],
                    "title" => ["comment" => "Nazwa wyświetlana (np. Google Analytics)", "label" => "Tytuł"]
                ]
            ],
            "cookie_expires_after_days" => [
                "comment" => "Ustawienia użytkownika są przechowywane przez tyle dni.",
                "label" => "Czas życia ciasteczka"
            ],
            "default_application_state" => [
                "comment" => "Domyślnie wyraź zgodę dla wszystkich aplikacji",
                "label" => "Domyślny stan aplikacji"
            ],
            "description" => "Skonfiguruj Klaro!",
            "label" => "Zgoda na ciasteczka",
            "lang" => [
                "comment" => "Znajdziesz wszystkie dostępne kody w dokumentacji Klaro!",
                "label" => "Kod języka"
            ],
            "must_consent" => [
                "comment" => "Wyświetl menedżera bezpopśrednio na pierwszej stronie, aby wymusić decyzję użytkownika.",
                "label" => "Wymuszenie zgody"
            ],
            "privacy_policy" => [
                "comment" => "Względna lub bezwzględna ścieżka do Twojej polityki prywatności.",
                "label" => "Polityka prywatności"
            ],
            "tabs" => ["apps" => "Aplikacje", "general" => "Ogólne", "translations" => "Tłumaczenia"],
            "translations" => [
                "repeater" => ["code" => ["label" => "Kod języka"], "json" => ["label" => "JSON"]]
            ]
        ],
        "cookies" => [
            "description" => "Zarządzanie ciasteczkami i modułami",
            "label" => "Ciasteczka i Moduły"
        ],
        "data_retention" => [
            "default_keep_days" => [
                "comment" => "Obowiązuje dla wszystkich zarejestrowanych wtyczek, jeżeli poniżej nie podano inaczej",
                "label" => "Usuń dane po określonej ilości dni"
            ],
            "description" => "Skonfiguruj zasady przechowywania danych",
            "enabled" => [
                "comment" => "Automatycznie usuń dane po określonym czasie",
                "label" => "Automatyczne czyszczenie"
            ],
            "keep_days" => ["label" => "Usuń dane po określonej ilości dni"],
            "label" => "Przechowywanie danych"
        ],
        "info" => [
            "bannerlaws_title" => "Przepisy dotyczące banerów odnoszące się do każdej lokalizacji kraju",
            "cookieconsent_title" => "Zgoda użytkownika na pliki cookie",
            "cookiesmodulessetup_title" => "Przykład konfiguracji plików cookie i modułów",
            "cookiesmodulesuserguide_title" => "Instrukcja obsługi plików cookie i modułów",
            "dataretention_title" => "Podręcznik użytkownika do przechowywania danych",
            "description" => "Informacje i pomoc w konfiguracji",
            "dpolinks_title" => "Łącza kontaktowe do DPO najpopularniejszych plików cookie",
            "index_title" => "Witamy w OctoberCMS RODO i wtyczce ePrivacy",
            "label" => "Informacje i pomoc",
            "overallinfo_title" => "Informacje o RODO i prywatności elektronicznej"
        ]
    ]
];
