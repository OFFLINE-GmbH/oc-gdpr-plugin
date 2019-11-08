<?php return [
    'plugin'          => [
        'name'        => 'GDPR ja ePrivacy',
        'description' => 'Tee sivustostasi GDPR ja ePrivacy sopivat',
    ],
    'common'          => [
        'enabled'         => 'Päällä',
        'disabled'        => 'Pois',
        'sorted'          => 'Järjestys päivitetty',
        'save_settings'   => 'Tallenna asetukset',
        'contact_details' => 'Yhteystiedot',
        'links'           => 'Linkit',
    ],
    'cookie_banner'   => [
        'description'         => 'Näytä evästebanneri',
        'message'             => 'Käytämme sivustolla evästeitä, joiden avulla personoimme ja analysoimme liikennettä. Haluatko hyväksyä evästeet sivustoltamme?',
        'advanced_settings'   => 'Edistyneet asetukset',
        'decline'             => 'Hylkää',
        'accept'              => 'Hyväksy',
        'include_css'         => [
            'title'       => 'Sisällytä CSS',
            'description' => 'Sisällytä oletustyylit tähän komponenttiin',
        ],
        'include_js'          => [
            'title'       => 'Sisällytä JS',
            'description' => 'Sisällytä oletusskriptit tähän komponenttiin',
        ],
        'update_partial'      => [
            'title'       => 'Palanen pehmeää uudelleenlatausta varten',
            'description' => 'Tämä palanen ladataan käyttäjän hyväksynnän jälkeen.',
        ],
        'update_selector'     => [
            'title'       => 'CSS valitsija pehmeää uudelleenlatausta varten',
            'description' => 'Tämä palanen ladataan tähän elementtiin.',
        ],
        'cookie_manager_page' => [
            'title'       => 'Edistyksellisten asetusten sivu',
            'description' => 'Sijoita cookieManager-komponentti tähän sivuun',
            'empty'       => 'Ilman edistyksellisiä asetuksia',
        ],
    ],
    'cookie_manager'  => [
        'description' => 'Näyttää yleiskatsauksen ja muokkaa evästeiden asetukset kaikista ylläpidon asetuksista.',
        'expiry'      => [
            3  => 'Kysy uudelleen 3 kk kuluttua',
            6  => 'Kysy uudelleen 6 kk kuluttua',
            12 => 'Kysy uudelleen 1 vuoden kuluttua',
            24 => 'Kysy uudelleen 2 vuoden kuluttua',
            36 => 'Kysy uudelleen 3 vuoden kuluttua',
        ],
    ],
    'consent_manager' => [
        'description'    => 'Sisältää Klaro! Consent Manager',
        'include_assets' => [
            'title'       => 'Sisällytä assetit',
            'description' => 'Sisältää kaikki tarvittavat JS-tiedostot automaattisesti',
        ],
        'style_prefix'   => [
            'title'       => 'CSS-etuliite',
            'description' => 'Käytä tätä css-luokkaa Klaro! HTML-koodissa (poistaa oletustyylit)',
        ],
    ],
    'settings'        => [
        'cookies'        => [
            'label'       => 'Evästeet ja moduulit',
            'description' => 'Evästeiden ja moduulien hallinta',
        ],
        'cookie_consent' => [
            'label'                     => 'Evästeen hyväksyntä',
            'description'               => 'Säädä Klaro! Manager',
            'cookie_expires_after_days' => [
                'label'   => 'Evästeen elinikä päivissä',
                'comment' => 'Käyttäjän asetukset säilytetään valitun ajan.',
            ],
            'privacy_policy'            => [
                'label'   => 'Yksityisyyskäytännöt',
                'comment' => 'Relatiivinen tai absoluuttinen linkki tietosuojaselosteeseen',
            ],
            'default_application_state' => [
                'label'   => 'Oletustila',
                'comment' => 'Aktivoi hyväksyntä kaikkiin sovelluksiin oletuksena',
            ],
            'must_consent'              => [
                'label'   => 'Pakollinen hyväksyntä',
                'comment' => 'Näytä hyväksyntävalinta heti ensimmäisellä sivulla ja pakota käyttäjä kuittamaan valinta',
            ],
            'lang'                      => [
                'label'   => 'Kielikoodi',
                'comment' => 'Löydät vaihtoehdot Klaro! dokumentaatiosta',
            ],
            'tabs'                      => [
                'translations' => 'Käännökset',
                'apps'         => 'Sovellukset',
                'general'      => 'Yleiset',
            ],
            'translations'              => [
                'repeater' => [
                    'code' => [
                        'label' => 'Kielikoodi',
                    ],
                    'json' => [
                        'label' => 'JSON',
                    ],
                ],
            ],
            'apps'                      => [
                'repeater' => [
                    'name'              => [
                        'label'   => 'Nimi',
                        'comment' => 'Yksinkertainen nimi sovellukselle (esim. google-analytics)',
                    ],
                    'application_state' => [
                        'label'   => 'Oletuksena päällä',
                        'comment' => 'Valitse tämä oletukseksi. Yliajaa oletusasetukset päätasolta.',
                    ],
                    'required'          => [
                        'label'   => 'Hyväksyntä on pakollinen',
                        'comment' => 'Tätä sovellusta ei voi kytkeä pois',
                    ],
                    'opt_out'           => [
                        'label'   => 'Hylkää',
                        'comment' => 'Tämän sovelluksen skriptit ladataan ensimmäisellä sivulla ilman käyttäjän hyväksyntää.',
                    ],
                    'only_once'         => [
                        'label'   => 'Lataa skripti vain kerran',
                        'comment' => 'Tämän sovelluksen skriptit ladataan vain kerran, vaikka käyttäjä aktivoisi ne uudelleen.',
                    ],
                    'title'             => [
                        'label'   => 'Otsikko',
                        'comment' => 'Näyttönimi (esim. Google Analytics)',
                    ],
                    'purposes'          => [
                        'label'   => 'Tarkoitus',
                        'comment' => 'Käännökset löytyvät käännöset osiosta. (esim. analytics, user-tracking)',
                    ],
                    'cookies'           => [
                        'label'   => 'Sovelluksen evästeet',
                        'comment' => 'Merkki tai RegEx evästeen nimessä. Nämä evästeet poistetaan automaattisesti, jos käyttäjä kytkee ne pois päältä. (esim. /^_ga_.*$/ or custom_tracker_cookie)',
                    ],
                    'callback'          => [
                        'label'   => 'Callback-toiminto',
                        'comment' => 'Tämä JavaSkripti suoritetaan aina kun käyttäjä aktivoi sovelluksen.<br /><pre><small>function (consent, app) { // ... }</small></pre>',
                    ],
                ],
            ],
        ],
        'data_retention' => [
            'label'             => 'Tiedon tallennus',
            'description'       => 'Säädä tiedon tallennus käytännöt',
            'enabled'           => [
                'label'   => 'Puhdistus päällä',
                'comment' => 'Poista vanha data automaattisesti vanhenemisen jälkeen',
            ],
            'default_keep_days' => [
                'label'   => 'Poista data x-päivän jälkeen',
                'comment' => 'Voimassa kaikille rekisteröidyille liitännäisille jos muuta ei ole määritelty alla',
            ],
            'keep_days'         => [
                'label' => 'Poista x-päivän jälkeen',
            ],
        ],
        'info'           => [
            'label'                         => 'Info ja tietoja',
            'description'                   => 'Informaatio ja tietoja käyttöönotosta',
            'bannerlaws_title'              => 'Banner Laws Relating to each Country Location',
            'cookieconsent_title'           => 'Suostumus evästeisiin Käyttäjän opas',
            'cookiesmodulessetup_title'     => 'Evästeet ja moduuli asetuksesimerkki',
            'cookiesmodulesuserguide_title' => 'Evästeet ja moduulit käyttöopas',
            'dataretention_title'           => 'Tiedon tallenuksen ohjeistus',
            'dpolinks_title'                => 'Yhteystietolinkki tietojen tallennuksesta vastaavalle (yleisimmät evästeet)',
            'overallinfo_title'             => 'GDPR-seloste ja ePrivacy',
            'index_title'                   => 'Tervetuloa OctoberCMS GDPR ja ePrivacy liitännäiseen',
        ],
    ],
    'cookie_group'    => [
        'fields' => [
            'name'                   => 'Ryhmän nimi',
            'initial_status'         => 'On päällä käynnistyksessä',
            'initial_status_comment' => 'This will set the item to be enabled at Start-up, please note ePrivacy requires many items to be turned off at default',
            'required'               => 'Vaaditaan verkkosivuston toimintaa varten',
            'required_comment'       => 'Evästeet ja/tai moduulit ryhmässä, jotka tarvitaan verkkosivun oikeelliseen toimintaan ja siksi käyttäjä ei voi ottaa pois käytöstä.',
            'slug'                   => 'Slug (osoitteen tarkenne)',
            'default_level'          => 'Tämä taso on oletuksena valittuna',
        ],
        'tabs'   => [
            'description' => 'Kuvaus',
            'cookies'     => 'Evästeet',
        ],
    ],
    'cookie'          => [
        'fields' => [
            'name_owner'                  => 'Omistaja',
            'name_owner_comment'          => 'Palvelun omistajan nimi esim. Google Analytics',
            'code'                        => 'Koodi',
            'code_comment'                => 'Tämä luodaan liitännäistä varten (sinun ei tarvitse muokata tätä)',
            'intial_status'               => 'Tämä eväste on oletuksena käytössä',
            'levels'                      => 'Evästeiden tasot',
            'item_details'                => 'Kohteiden tiedot',
            'purpose'                     => 'Tarkoitus',
            'purpose_comment'             => 'Under ePrivacy Law (Article 4, para 11 and article 13, para 1, C and para 2, F), you need to Describe the Purpose of the Use, Processing and any Notifications e.g. \'These cookies are used from AddThis social sharing widget in order to make sure you see the updated count when you share a page\'.',
            'contact_details_dpo'         => 'Yhteystiedot tietojen hallitsijaan',
            'contact_details_dpo_comment' => 'Under ePrivacy Law (Article 13, Para 1, A and Recital 42), you have to give the DPO Contact Address e.g. Cloudflare, Inc. 101 Townsend St. San Francisco, CA 94107. Attention: Data Protection Officer, privacyquestions@cloudflare.com (please note the email address is optional)',
            'contact_links_dpo'           => 'Yhteyslinkit tietojen hallitsijaan',
            'contact_links_dpo_comment'   => 'Under ePrivacy Law (Article 13, para 2, B, C and D), you need to give links for \'rights to complain to Supervisory authority and to access correct data policy\' this means linking to their Privacy Policy, Terms and Conditions, Cookie Privacy and Opt-Out Pages if they have them.',
            'contact_links_dpo_prompt'    => 'Lisää uusi linkki',
            'contact_links'               => [
                'name' => 'Ankkuriteksti',
                'href' => 'Kohdelinkki (absoluuttinen URL)',
            ],
            'cookie_levels'               => [
                'purpose_prompt'         => 'Lisää yleiset käyttötarkoitukset',
                'purpose_label'          => 'Yleiset käyttötarkoitustasot',
                'section1_label'         => 'Vinkki yleiseen käyttötarkoitukseen',
                'section1_comment'       => 'ePrivacy lain mukaan (Recital 32 and Article 29 working party guidance nov 2017), käytä yleistä Tilaus-prosessia yhdessä meidän hallintatasotoimintojen kanssa. Tämä tarkoittaa, että käytössä on POIS asetus, PERUSASETUKSET, EDISTYKSELLISET ASETUKSET ja TÄYDET ASETUKSET. Esimerkiksi Google Analytics, jossa käytössäsi on POIS asetus, PERUSSEURANTA, PERUSSEURANTA ja LIITÄNNÄISET ja lopuksi TÄYDET ASETUKSET. Tasot riippuvat siitä, mitä lisäämässä.',
                'section2_label'         => 'Vinkki kohteeseen',
                'section2_comment'       => 'You can list as many item details as you want, if this is for a cookie make sure you list all the Cookie Identification Names, for example Google Analytics can have 8 or more different ones different ones. Also make sure you have equal number of Name (Cookie Identification), Duration/Expiry and Type fields. To find the list of Website Cookies in Google Chrome go to Dev Tools > Application > Cookies. You can also use the website: https://cookiepedia.co.uk/ to look-up Cookies.',
                'name'                   => 'Nimi',
                'identification'         => 'Nimi (Evästeen tunnistus)',
                'identification_comment' => 'Evästeen etuliite esim. \'_ga\'',
                'provider'               => 'Toimittaja',
                'provider_comment'       => 'ePrivacy lain mukaan, sinun on annettava verkko-osoite. (ilman https://, www ja / loppua)',
                'purpose'                => 'Tarkoitus',
                'purpose_comment'        => 'Kuvaa käyttötarkoitus yleisellä tasolla yhdessä kappaleessa. Pykälä 5 vaatii, että hyväksyntää pyydetään yleisellä tavalla kuvauttuun eksplisiittiseen tarkoitukseen.',
                'expiry'                 => 'Kesto/Vanheneminen',
                'expiry_comment'         => 'ePrivacy lain mukaan, sinun on kerrottava, kuinka kauan tietoja käytetään käyttäjän selaimesta esim. SESSIO, 3 kk, 2 vuotta.',
                'type'                   => 'Tyyppi',
                'type_comment'           => 'Under ePrivacy Law, you need to state what type of cookie or module is, to make things easier we have made a drop-down menu',
            ],
        ],
        'tabs'   => [
            'contact'      => 'Yhteystiedot',
            'levels'       => 'Hallinnoi tasoja',
            'provider'     => 'Toimittaja',
            'item_details' => 'Hallinnoi kohteiden tietoja',
        ],
    ],
    'permissions'     => [
        'manage_cookie_consent' => 'Voi hallita evästeiden hyväksynnän asetuksia',
        'manage_data_retention' => 'Voi hallita tiedon säilönnän käytäntöjä',
        'manage_cookie_groups'  => 'Voi hallita evästeryhmiä',
    ],
];