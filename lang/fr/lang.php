<?php return [
    'plugin' => [
        'name' => 'GDPR',
        'description' => 'Rendez votre site conforme au RGPD',
    ],
    'consent_manager' => [
        'description' => 'Comprend le gestionnaire de consentement Klaro!',
        'include_assets' => [
            'title' => 'Inclure les assets',
            'description' => 'Inclut automatiquement tous les fichiers JS nécessaires.',
        ],
        'style_prefix' => [
            'title' => 'Prefixe CSS',
            'description' => 'Utilisez cette classe css dans le balisage HTML Klaro! (supprime les styles par défaut).',
        ],
    ],
    'settings' => [
        'cookie_consent' => [
            'label' => 'Cookie de consentement',
            'description' => 'Réglages pour Klaro! Manager',
            'cookie_expires_after_days' => [
                'label' => 'Durée de vie des cookies en jours',
                'comment' => 'Les réglages de l\'utilisateur sont conservés pendant ce nombre de jours.',
            ],
            'privacy_policy' => [
                'label' => 'Politique de confidentialité',
                'comment' => 'Lien relatif ou absolu avec votre politique de confidentialité.',
            ],
            'default_application_state' => [
                'label' => 'État par défaut de l\'application',
                'comment' => 'Activer par défaut le consentement pour toutes les applications.',
            ],
            'must_consent' => [
                'label' => 'Afficher le gestionnaire',
                'comment' => 'Afficher le gestionnaire de consentement directement à la première vue de la page pour forcer l\'utilisateur à prendre une décision.',
            ],
            'lang' => [
                'label' => 'Code de langage',
                'comment' => 'Vous trouverez tous les codes disponibles dans la documentation de Klaro!.',
            ],
            'tabs' => [
                'translations' => 'Traductions',
                'apps' => 'Applications',
                'general' => 'Général',
            ],
            'translations' => [
                'repeater' => [
                    'code' => [
                        'label' => 'Code de langage',
                    ],
                    'json' => [
                        'label' => 'JSON',
                    ],
                ],
            ],
            'apps' => [
                'repeater' => [
                    'name' => [
                        'label' => 'Nom',
                        'comment' => 'Un nom simple et court pour cette application (ex. google-analytics).',
                    ],
                    'application_state' => [
                        'label' => 'Activé par défaut',
                        'comment' => 'Activez cette application par défaut. Ceci écrase le réglage global.',
                    ],
                    'required' => [
                        'label' => 'Consentement obligatoire',
                        'comment' => 'Cette application ne peut pas être désactivée.',
                    ],
                    'opt_out' => [
                        'label' => 'Opt-out',
                        'comment' => 'Les scripts de cette application sont chargés à la première vue de la page sans le consentement du visiteur (consentement implicite).',
                    ],
                    'only_once' => [
                        'label' => 'Charger le script une seule fois',
                        'comment' => 'Les scripts de cette application ne sont chargés qu\'une seule fois, même si le visiteur le réactive plusieurs fois.',
                    ],
                    'title' => [
                        'label' => 'Titre',
                        'comment' => 'Nom d\'affichage (ex. Google Analytics).',
                    ],
                    'purposes' => [
                        'label' => 'Objectifs',
                        'comment' => 'Ces objectifs doivent être traduits dans la section des traductions (ex. analytics, suivi de l\'utilisateur).',
                    ],
                    'cookies' => [
                        'label' => 'Cookies de cette application',
                        'comment' => 'Chaîne ou RegEx de noms de cookies. Ces cookies sont automatiquement supprimés si l\'utilisateur désactive cette application. (ex. /^_ga_.*$/ ou custom_tracker_cookie)',
                    ],
                    'callback' => [
                        'label' => 'Fonction de retour',
                        'comment' => 'Cette fonction JavaScript est appelée chaque fois qu\'un utilisateur active cette application.<br /><pre><small>function (consent, app) { // ... }</small></pre>',
                    ],
                ],
            ],
        ],
        'data_retention' => [
            'label' => 'Conservation des données',
            'description' => 'Configurez vos politiques de conservation des données.',
            'enabled' => [
                'label' => 'Nettoyage actif',
                'comment' => 'Supprimer automatiquement les anciennes données après leur expiration.',
            ],
            'default_keep_days' => [
                'label' => 'Suppression des données après x jours',
                'comment' => 'Valable pour tous les plugins enregistrés si rien d\'autre n\'est spécifié ci-dessous.',
            ],
            'keep_days' => [
                'label' => 'Effacer les données après x jours',
            ],
        ],
    ],
    'permissions' => [
        'manage_cookie_consent' => 'Peut gérer les paramètres des cookies de consentement',
        'manage_data_retention' => 'Peut gérer les politiques de conservation des données',
    ],
];