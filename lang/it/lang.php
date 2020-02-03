<?php
return [
    "common" => [
        "contact_details" => "Dettagli del contatto",
        "disabled" => "Disabilitato",
        "enabled" => "Abilitato",
        "links" => "Link",
        "save_settings" => "Salva le impostazioni",
        "sorted" => "Ordine aggiornato correttamente"
    ],
    "consent_manager" => [
        "description" => "Include il Klaro! Responsabile del consenso",
        "include_assets" => [
            "description" => "Include automaticamente tutti i file JS necessari",
            "title" => "Includi risorse"
        ],
        "style_prefix" => [
            "description" => "Usa questa classe CSS nel Klaro! Markup HTML (rimuove gli stili predefiniti)",
            "title" => "Prefisso CSS"
        ]
    ],
    "cookie" => [
        "fields" => [
            "code" => "Codice",
            "code_comment" => "Questo è generato per il funzionamento del plugin (non è necessario toccarlo)",
            "contact_details_dpo" => "Dettagli di contatto del Titolare del trattamento",
            "contact_details_dpo_comment" => "Ai sensi della legge sulla e-privacy (articolo 13, paragrafo 1, lettera A e considerando 42), è necessario fornire l'indirizzo di contatto DPO, ad es. Cloudflare, Inc. 101 Townsend St. San Francisco, CA 94107. Attenzione: Responsabile della protezione dei dati, privacyquestions@cloudflare.com (tenere presente che l'indirizzo e-mail è facoltativo)",
            "contact_links" => ["href" => "Target collegamento (URL assoluto)", "name" => "Testo di ancoraggio"],
            "contact_links_dpo" => "Link di contatto del Titolare del trattamento",
            "contact_links_dpo_comment" => "Ai sensi della legge sulla e-privacy (articolo 13, paragrafo 2, B, C e D), è necessario fornire collegamenti per \"diritti di reclamo all'autorità di controllo e di accesso alla politica dei dati corretta\", ciò significa collegamento alla loro politica sulla privacy, termini e condizioni, cookie Privacy e pagine di opt-out, se disponibili.",
            "contact_links_dpo_prompt" => "Aggiungi nuovo link",
            "cookie_levels" => [
                "expiry" => "Durata / Scadenza",
                "expiry_comment" => "Ai sensi della legge sulla e-privacy, è necessario indicare per quanto tempo verrà utilizzato nel browser dell'utente, ad es. SESSIONE, 3 mesi, 2 anni.",
                "identification" => "Nome (identificazione cookie)",
                "identification_comment" => "Il nome del codice prefisso del cookie, ad es. '_Ga'",
                "name" => "Nome",
                "provider" => "Provider",
                "provider_comment" => "Ai sensi della legge sulla e-privacy, è necessario indicare il nome di dominio del sito Web. (escludi https: //, www e / alla fine)",
                "purpose" => "Scopo",
                "purpose_comment" => "Descrivere lo scopo dell'uso ad ogni livello granulare in un singolo paragrafo. L'articolo 5 richiede che il consenso sia richiesto in modo granulare per scopi \"specifici, espliciti\".",
                "purpose_label" => "Livelli di scopo granulari",
                "purpose_prompt" => "Aggiungi livelli di scopo granulari",
                "section1_comment" => "Ai sensi della legge sulla e-privacy (considerando 32 e orientamento del gruppo di lavoro articolo 29 nov 2017), utilizzare una procedura di attivazione granulare con la nostra funzione di gestione dei livelli. Ciò significa avere un'impostazione off, quindi avere un'impostazione di base, quindi avere un'impostazione più avanzata e così via fino a un'impostazione completa. Un esempio di ciò potrebbe essere Google Analytics in cui abbiamo un'impostazione di disattivazione, quindi un'impostazione di tracciamento di base, quindi un'impostazione di tracciamento di base più plug-in, quindi infine un'impostazione completa con tutto. Il numero di livelli dipende da cosa stai aggiungendo.",
                "section1_label" => "Suggerimento utile per i livelli di scopo granulare",
                "section2_comment" => "Puoi elencare tutti i dettagli degli elementi che desideri, se questo è per un cookie assicurati di elencare tutti i nomi di identificazione dei cookie, ad esempio Google Analytics può avere 8 o più diversi nomi diversi. Assicurati inoltre di avere lo stesso numero di campi Nome (Identificazione cookie), Durata / Scadenza e Tipo. Per trovare l'elenco dei cookie del sito Web in Google Chrome, vai su Strumenti di sviluppo> Applicazione> Cookie. Puoi anche utilizzare il sito Web: https://cookiepedia.co.uk/ per cercare i cookie.",
                "section2_label" => "Suggerimento utile per i dettagli dell'articolo",
                "type" => "genere",
                "type_comment" => "Ai sensi della legge sulla e-privacy, è necessario indicare che tipo di cookie o modulo è, per semplificare le cose abbiamo creato un menu a discesa"
            ],
            "initial_status" => "",
            "intial_status" => "Questo cookie è abilitato per impostazione predefinita",
            "item_details" => "dettagli dell'articolo",
            "levels" => "Livelli di cookie",
            "name_owner" => "Proprietario",
            "name_owner_comment" => "Nome del proprietario del servizio, ad es. statistiche di Google",
            "name_owner_comments" => "",
            "purpose" => "Scopo",
            "purpose_comment" => "Ai sensi della legge sulla e-privacy (articolo 4, paragrafo 11 e articolo 13, paragrafo 1, C e paragrafo 2, F), è necessario descrivere lo scopo dell'uso, l'elaborazione e eventuali notifiche ad es. \"Questi cookie sono utilizzati da AddThis widget di condivisione social per essere sicuri di vedere il conteggio aggiornato quando condividi una pagina\"."
        ],
        "tabs" => [
            "contact" => "Informazioni sui contatti",
            "item_details" => "Gestisci i dettagli dell'articolo",
            "levels" => "Gestisci livelli",
            "provider" => "Provider"
        ]
    ],
    "cookie_banner" => [
        "accept" => "Accettare",
        "advanced_settings" => "Impostazioni avanzate",
        "cookie_manager_page" => [
            "description" => "Posiziona il componente cookieManager su questa pagina",
            "empty" => "Senza impostazioni avanzate",
            "title" => "Pagina per impostazioni avanzate"
        ],
        "decline" => "Declino",
        "description" => "Visualizza un banner cookie",
        "include_css" => [
            "description" => "Includi stili predefiniti per questo componente",
            "title" => "Includi CSS"
        ],
        "include_js" => [
            "description" => "Includi script predefiniti per questo componente",
            "title" => "Includi JS"
        ],
        "message" => "Utilizziamo i cookie per personalizzare i contenuti e analizzare il nostro traffico. Si prega di decidere se si è disposti ad accettare i cookie dal nostro sito Web.",
        "update_partial" => [
            "description" => "Questo parziale verrà caricato quando l'utente accetta.",
            "title" => "Parziale per ricarica graduale"
        ],
        "update_selector" => [
            "description" => "Il parziale verrà caricato in questo elemento.",
            "title" => "Selettore CSS per ricarica graduale"
        ]
    ],
    "cookie_group" => [
        "fields" => [
            "default_level" => "Questo livello è preselezionato per l'utente",
            "initial_status" => "Acceso all'avvio",
            "initial_status_comment" => "Questo imposterà l'elemento da abilitare all'avvio, ti preghiamo di notare che ePrivacy richiede che molti articoli siano disattivati di default",
            "name" => "Nome del gruppo",
            "required" => "Richiesto per il funzionamento e il funzionamento del sito Web",
            "required_comment" => "I cookie e / o i moduli di questo gruppo sono necessari per il corretto funzionamento del sito Web e pertanto non possono essere disabilitati dall'utente.",
            "slug" => "lumaca"
        ],
        "tabs" => ["cookies" => "Biscotti", "description" => "Descrizione"]
    ],
    "cookie_manager" => [
        "description" => "Visualizza una panoramica e un modulo di modifica per tutti i cookie definiti nelle impostazioni di back-end",
        "expiry" => [
            "3" => "Chiedi di nuovo tra 3 mesi",
            "6" => "Chiedi di nuovo tra 6 mesi",
            "12" => "Chiedi di nuovo tra 1 anno",
            "24" => "Chiedi di nuovo tra 2 anni",
            "36" => "Chiedi di nuovo tra 3 anni"
        ]
    ],
    "permissions" => [
        "manage_cookie_consent" => "Può gestire le impostazioni del consenso sui cookie",
        "manage_cookie_groups" => "Può gestire gruppi di cookie",
        "manage_data_retention" => "Può gestire i criteri di conservazione dei dati"
    ],
    "plugin" => [
        "description" => "Rendi conforme il tuo sito web GDPR ed ePrivacy",
        "name" => "GDPR ed ePrivacy"
    ],
    "settings" => [
        "cookie_consent" => [
            "apps" => [
                "repeater" => [
                    "application_state" => [
                        "comment" => "Abilita questa app per impostazione predefinita. Questo sovrascrive l'impostazione globale",
                        "label" => "Abilitato per impostazione predefinita"
                    ],
                    "callback" => [
                        "comment" => "Questa funzione JavaScript viene chiamata ogni volta che un utente abilita questa app.<br /><pre><small>funzione (consenso, app) { // ... }</small></pre>",
                        "label" => "Funzione di richiamata"
                    ],
                    "cookies" => [
                        "comment" => "Stringa o RegEx di nomi di cookie. Questi cookie vengono automaticamente rimossi se l'utente disabilita questa app. (es. /^_ga_.*\$/ o custom_tracker_cookie)",
                        "label" => "Cookie di questa app"
                    ],
                    "name" => [
                        "comment" => "Un nome semplice e breve per questa app (es. Google-analytics)",
                        "label" => "Nome"
                    ],
                    "only_once" => [
                        "comment" => "Gli script di questa app vengono caricati una sola volta anche se il visitatore la riattiva più volte.",
                        "label" => "Carica script una sola volta"
                    ],
                    "opt_out" => [
                        "comment" => "Gli script di questa app vengono caricati nella visualizzazione della prima pagina senza il consenso del visitatore.",
                        "label" => "Decidere di uscire"
                    ],
                    "purposes" => [
                        "comment" => "Questi scopi devono essere tradotti nella sezione traduzioni. (es. analisi, tracciamento dell'utente)",
                        "label" => "Finalità"
                    ],
                    "required" => [
                        "comment" => "Questa app non può essere disabilitata",
                        "label" => "È richiesto il consenso"
                    ],
                    "title" => ["comment" => "Nome visualizzato (ad es. Google Analytics)", "label" => "Titolo"]
                ]
            ],
            "cookie_expires_after_days" => [
                "comment" => "Le impostazioni dell'utente vengono memorizzate per molti giorni.",
                "label" => "Durata dei cookie in giorni"
            ],
            "default_application_state" => [
                "comment" => "Abilita il consenso per tutte le applicazioni per impostazione predefinita",
                "label" => "Stato dell'applicazione predefinito"
            ],
            "description" => "Configura Klaro! Manager",
            "label" => "Consenso sui cookie",
            "lang" => [
                "comment" => "Troverai tutti i codici disponibili nel Klaro! documentazione",
                "label" => "Codice lingua"
            ],
            "must_consent" => [
                "comment" => "Visualizza il gestore del consenso direttamente nella prima pagina per forzare una decisione da parte dell'utente",
                "label" => "Deve essere d'accordo"
            ],
            "privacy_policy" => [
                "comment" => "Link relativo o assoluto alla tua politica sulla privacy",
                "label" => "POLITICA SULLA RISERVATEZZA"
            ],
            "tabs" => ["apps" => "Applicazioni", "general" => "generale", "translations" => "Traduzioni"],
            "translations" => [
                "repeater" => ["code" => ["label" => "Codice lingua"], "json" => ["label" => "JSON"]]
            ]
        ],
        "cookies" => ["description" => "Gestione dei cookie e dei moduli", "label" => "Cookie e moduli"],
        "data_retention" => [
            "default_keep_days" => [
                "comment" => "Valido per tutti i plug-in registrati se non viene specificato nient'altro di seguito",
                "label" => "Elimina i dati dopo giorni"
            ],
            "description" => "Configura i tuoi criteri di conservazione dei dati",
            "enabled" => [
                "comment" => "Elimina automaticamente i vecchi dati dopo che sono scaduti",
                "label" => "Pulizia abilitata"
            ],
            "keep_days" => ["label" => "Elimina i dati dopo giorni"],
            "label" => "Conservazione dei dati"
        ],
        "info" => [
            "bannerlaws_title" => "Leggi sui banner relative a ciascun Paese",
            "cookieconsent_title" => "Guida per l'utente del consenso ai cookie",
            "cookiesmodulessetup_title" => "Esempio di impostazione di cookie e moduli",
            "cookiesmodulesuserguide_title" => "Manuale dell'utente di cookie e moduli",
            "dataretention_title" => "Guida dell'utente per la conservazione dei dati",
            "description" => "Informazioni e aiuto per l'installazione",
            "dpolinks_title" => "Link di contatto per DPO dei cookie più comuni",
            "index_title" => "Benvenuto in OctoberCMS GDPR ed ePrivacy Plugin",
            "label" => "Informazioni e aiuto",
            "overallinfo_title" => "Informazioni su GDPR ed ePrivacy"
        ]
    ]
];
