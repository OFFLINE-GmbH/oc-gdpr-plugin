<?php
return [
    "common" => [
        "contact_details" => "Détails contact",
        "disabled" => "Désactive",
        "enabled" => "Activé",
        "links" => "Liens",
        "save_settings" => "Enregistrer",
        "sorted" => "Ordre mis à jour avec succès"
    ],
    "consent_manager" => [
        "description" => "Comprend le gestionnaire de consentement Klaro!",
        "include_assets" => [
            "description" => "Inclut automatiquement tous les fichiers JS nécessaires.",
            "title" => "Inclure les assets"
        ],
        "style_prefix" => [
            "description" => "Utilisez cette classe css dans le balisage HTML Klaro! (supprime les styles par défaut).",
            "title" => "Prefixe CSS"
        ]
    ],
    "cookie" => [
        "fields" => [
            "code" => "Code",
            "code_comment" => "Ceci est généré pour que le plugin fonctionne (vous n'avez pas besoin d'y toucher).",
            "contact_details_dpo" => "Coordonnées du responsable du traitement des données",
            "contact_details_dpo_comment" => "En vertu de la loi sur la protection de la vie privée, vous devez donner l'adresse de contact du responsable de la protection des données du cookie, par exemple Cloudflare, Inc. 101 Townsend St. San Francisco, CA 94107. Attention : Délégué à la protection des données, privacyquestions@cloudflare.com",
            "contact_links" => ["href" => "Cible du lien (URL absolue)", "name" => "Libellé"],
            "contact_links_dpo" => "Liens de contact du responsable du traitement des données",
            "contact_links_dpo_comment" => "En vertu de la loi sur la protection de la vie privée, vous devez fournir l'adresse de la page web du responsable de la protection des données du cookie, par exemple Lien vers leurs Conditions d'utilisation, Politique de confidentialité, Politique de gestion des cookies, etc",
            "contact_links_dpo_prompt" => "Ajouter un nouveau lien",
            "cookie_levels" => [
                "expiry" => "Durée/Expiration",
                "expiry_comment" => "En vertu de la loi sur la protection de la vie privée, vous devez indiquer combien de temps il sera utilisé dans le navigateur de l'utilisateur. ex: SESSION, 3 mois, 2 ans.",
                "identification" => "Nom (Identification du cookie)",
                "identification_comment" => "Le nom du code de préfixe du cookie, par exemple '_ga'",
                "name" => "Nom",
                "provider" => "Fournisseur",
                "provider_comment" => "En vertu de la loi sur la protection de la vie privée, vous devez indiquer le nom de domaine du site Web.  (exclure https://, www et / de l'adresse)",
                "purpose" => "Objectif",
                "purpose_comment" => "Décrire le but de l'utilisation à chaque niveau granulaire dans un seul paragraphe. L'article 5 exige que le consentement soit demandé de manière granulaire à des fins 'spécifiées et explicites'.",
                "purpose_label" => "Niveaux d'utilisation granulaires",
                "purpose_prompt" => "Ajouter des niveaux d'utilisation granulaires",
                "section1_comment" => "En vertu de la loi sur la protection de la vie privée, utilisez un processus de consentement granulaire avec notre fonction de gestion des niveaux. ",
                "section1_label" => "Conseil utile pour les niveaux d'utilisation granulaires",
                "section2_comment" => "Vous pouvez lister autant de détails que vous le souhaitez, si c'est pour un cookie, assurez-vous de lister tous les noms d'identification des cookies du service. Par exemple Google Analytics peut en avoir 8 différents ou plus. Assurez-vous également d'avoir le même nombre de champs Nom (Identification du cookie), Durée/Expiration et Type. Pour trouver la liste des cookies du site Web dans Google Chrome, allez dans Outils de développement > Application > Application > Cookies. Vous pouvez également utiliser le site Web : https://cookiepedia.co.uk/ pour rechercher des cookies.",
                "section2_label" => "Conseil utile pour le détail des éléments",
                "type" => "Type",
                "type_comment" => "En vertu de la loi sur la protection de la vie privée, vous devez indiquer le type de cookie ou de module, pour faciliter les choses, nous avons créé un menu déroulant."
            ],
            "initial_status" => "",
            "intial_status" => "Ce cookie est activé par défaut",
            "item_details" => "Détails des articles",
            "levels" => "Niveaux de cookie",
            "name_owner" => "Nom/Propriétaire",
            "name_owner_comment" => "Nom du propriétaire du service, ex. Google Analytics",
            "name_owner_comments" => "",
            "purpose" => "Objectif",
            "purpose_comment" => "Décrire le but de l'utilisation, du traitement et de toute notification, par exemple, Détermine si la navigation de l'utilisateur doit être enregistrée dans un registre statistique."
        ],
        "tabs" => [
            "contact" => "Coordonnées du contact",
            "item_details" => "Gérer les détails des articles",
            "levels" => "Gérer les niveaux",
            "provider" => "Fournisseur"
        ]
    ],
    "cookie_banner" => [
        "accept" => "Accepter",
        "advanced_settings" => "Paramètres avancés",
        "cookie_manager_page" => [
            "description" => "Placez le composant cookieManager sur cette page.",
            "empty" => "Sans paramètres avancés",
            "title" => "Page pour les paramètres avancés"
        ],
        "decline" => "Décliner",
        "description" => "Affiche une bannière pour les cookies",
        "include_css" => [
            "description" => "Inclure les styles par défaut pour ce composant",
            "title" => "Inclure le CSS"
        ],
        "include_js" => [
            "description" => "Inclure les scripts par défaut pour ce composant",
            "title" => "Inclure le JS"
        ],
        "message" => "Nous utilisons les cookies pour personnaliser le contenu et analyser notre trafic. Veuillez décider quel type de cookies vous êtes prêt à accepter.",
        "update_partial" => [
            "description" => "Ce partiel sera rechargé lorsque l'utilisateur acceptera.",
            "title" => "Modèle de partiel pour rechargement progressif."
        ],
        "update_selector" => [
            "description" => "Le partiel sera chargé dans cet élément.",
            "title" => "Sélecteur CSS pour rechargement progressif."
        ]
    ],
    "cookie_group" => [
        "fields" => [
            "default_level" => "Ce niveau est présélectionné pour l'utilisateur.",
            "initial_status" => "État initial",
            "initial_status_comment" => "Ce groupe de cookies est activé par défaut.",
            "name" => "Nom du groupe",
            "required" => "Requis",
            "required_comment" => "Les cookies de ce groupe sont nécessaires au bon fonctionnement du site et ne peuvent donc pas être désactivés par l'utilisateur.",
            "slug" => "Slug"
        ],
        "tabs" => ["cookies" => "Cookies", "description" => "Description"]
    ],
    "cookie_manager" => [
        "description" => "Affiche une vue d'ensemble et la possibilité de modifier tous les cookies que vous avez définis dans les paramètres du backend.",
        "expiry" => [
            "3" => "Demander à nouveau dans 3 mois",
            "6" => "Demander à nouveau dans 6 mois",
            "12" => "Demander à nouveau dans 1 année",
            "24" => "Demander à nouveau dans 2 années",
            "36" => "Demander à nouveau dans 3 années"
        ]
    ],
    "permissions" => [
        "manage_cookie_consent" => "Peut gérer les paramètres des cookies de consentement",
        "manage_cookie_groups" => "Peut gérer des groupes de cookies",
        "manage_data_retention" => "Peut gérer les politiques de conservation des données"
    ],
    "plugin" => [
        "description" => "Rendez votre site conforme au RGPD et lois pour la protection de la vie privée",
        "name" => "RGPD et vie privée"
    ],
    "settings" => [
        "cookie_consent" => [
            "apps" => [
                "repeater" => [
                    "application_state" => [
                        "comment" => "Activez cette application par défaut. Ceci écrase le réglage global.",
                        "label" => "Activé par défaut"
                    ],
                    "callback" => [
                        "comment" => "Cette fonction JavaScript est appelée chaque fois qu'un utilisateur active cette application.<br /><pre><small>function (consent, app) { // ... }</small></pre>",
                        "label" => "Fonction de retour"
                    ],
                    "cookies" => [
                        "comment" => "Chaîne ou RegEx de noms de cookies. Ces cookies sont automatiquement supprimés si l'utilisateur désactive cette application. (ex. /^_ga_.*\$/ ou custom_tracker_cookie)",
                        "label" => "Cookies de cette application"
                    ],
                    "name" => [
                        "comment" => "Un nom simple et court pour cette application (ex. google-analytics).",
                        "label" => "Nom"
                    ],
                    "only_once" => [
                        "comment" => "Les scripts de cette application ne sont chargés qu'une seule fois, même si le visiteur le réactive plusieurs fois.",
                        "label" => "Charger le script une seule fois"
                    ],
                    "opt_out" => [
                        "comment" => "Les scripts de cette application sont chargés à la première vue de la page sans le consentement du visiteur (consentement implicite).",
                        "label" => "Opt-out"
                    ],
                    "purposes" => [
                        "comment" => "Ces objectifs doivent être traduits dans la section des traductions (ex. analytics, suivi de l'utilisateur).",
                        "label" => "Objectifs"
                    ],
                    "required" => [
                        "comment" => "Cette application ne peut pas être désactivée.",
                        "label" => "Consentement obligatoire"
                    ],
                    "title" => ["comment" => "Nom d'affichage (ex. Google Analytics).", "label" => "Titre"]
                ]
            ],
            "cookie_expires_after_days" => [
                "comment" => "Les réglages de l'utilisateur sont conservés pendant ce nombre de jours.",
                "label" => "Durée de vie des cookies en jours"
            ],
            "default_application_state" => [
                "comment" => "Activer par défaut le consentement pour toutes les applications.",
                "label" => "État par défaut de l'application"
            ],
            "description" => "Réglages gestionnaire de consentement Klaro!",
            "label" => "Composant Klaro!",
            "lang" => [
                "comment" => "Vous trouverez tous les codes disponibles dans la documentation de Klaro!.",
                "label" => "Code de langage"
            ],
            "must_consent" => [
                "comment" => "Afficher le gestionnaire de consentement directement à la première vue de la page pour forcer l'utilisateur à prendre une décision.",
                "label" => "Afficher le gestionnaire"
            ],
            "privacy_policy" => [
                "comment" => "Lien relatif ou absolu avec votre politique de confidentialité.",
                "label" => "Politique de confidentialité"
            ],
            "tabs" => ["apps" => "Applications", "general" => "Général", "translations" => "Traductions"],
            "translations" => [
                "repeater" => ["code" => ["label" => "Code de langage"], "json" => ["label" => "JSON"]]
            ]
        ],
        "cookies" => [
            "description" => "Configurer les cookies et modules utilisés par le site et leur contrôle.",
            "label" => "Cookies et modules"
        ],
        "data_retention" => [
            "default_keep_days" => [
                "comment" => "Valable pour tous les plugins enregistrés si rien d'autre n'est spécifié ci-dessous.",
                "label" => "Suppression des données après x jours"
            ],
            "description" => "Configurez vos politiques de conservation des données.",
            "enabled" => [
                "comment" => "Supprimer automatiquement les anciennes données après leur expiration.",
                "label" => "Nettoyage actif"
            ],
            "keep_days" => ["label" => "Effacer les données après x jours"],
            "label" => "Conservation des données"
        ],
        "info" => [
            "bannerlaws_title" => "Lois sur les bannières relatives à chaque pays ",
            "cookieconsent_title" => "Guide de l'utilisateur du Cookie de consentement",
            "cookiesmodulessetup_title" => "Exemple de configuration des cookies et des modules",
            "cookiesmodulesuserguide_title" => "Guide de l'utilisateur des cookies et des modules",
            "dataretention_title" => "Guide de l'utilisateur sur la conservation des données",
            "description" => "Informations et aide pour la configuration",
            "dpolinks_title" => "Liens de contact des DPO, des cookies les plus courants",
            "index_title" => "Bienvenue sur le plugin RGPD et vie privée en ligne d'OctoberCMS.",
            "label" => "Infos et Aide",
            "overallinfo_title" => "Informations sur le RGPD et la vie privée en ligne"
        ]
    ]
];
