<?php return [
    'plugin' => [
        'name' => 'RGPD e privacidade de dados',
        'description' => 'Torne o seu website complacente com o RGPD e matenha a privacidade dos dados',
    ],
    'common' => [
        'enabled' => 'Ativado',
        'disabled' => 'Desativado',
        'sorted' => 'Ordem atualizada com sucesso',
        'save_settings' => 'Guardar Definições',
        'contact_details' => 'Detalhes de Contacto',
        'links' => 'Links',
    ],
    'cookie_banner' => [
        'description' => 'Mostra um banner de cookies',
        'message' => 'O website utiliza cookies para personalizar conteúdo e para analizar o tráfego no website. Por favor escolha se quer aceitar as cookies do nosso website.',
        'advanced_settings' => 'Definições Avançadas',
        'decline' => 'Rejeitar',
        'accept' => 'Aceitar',
        'include_css' => [
            'title' => 'Inculuir CSS',
            'description' => 'Incluir estilos prédefinidos para este componente',
        ],
        'include_js' => [
            'title' => 'Inculuir JS',
            'description' => 'Incluir scripts prédefinidos para este componente',
        ],
        'update_partial' => [
            'title' => 'Partial para atualização progressiva',
            'description' => 'Este partial vai ser carregado quando o utilizador aceitar.',
        ],
        'update_selector' => [
            'title' => 'CSS seletor para atualização progressiva',
            'description' => 'O partial irá ser carregado para este elemento.',
        ],
        'cookie_manager_page' => [
            'title' => ' Página para definições avançadas',
            'description' => 'Coloque o componente cookieManager nesta página',
            'empty' => 'Sem definições avançadas',
        ],
        'deferred' => [
            'title' => 'Diferido',
            'description' => 'O gestor é carregado apenas se o onRenderCookieManager for explicitamente chamado',
        ],
    ],
    'cookie_manager' => [
        'description' => 'Mostra uma visão geral e um formulário de edição para todas as cookies definidas no backend',
        'expiry' => [
            3 => 'Perguntar outra vez em 3 meses',
            6 => 'Perguntar outra vez em 6 meses',
            12 => 'Perguntar outra vez em 1 ano',
            24 => 'Perguntar outra vez em 2 anos',
            36 => 'Perguntar outra vez em 3 anos',
        ],
    ],
    'consent_manager' => [
        'description' => 'Inclui o gestor de consentimento Klaro!',
        'include_assets' => [
            'title' => 'Incluir assets',
            'description' => 'Incluir todos of ficheiros JS necessários automaticamente',
        ],
        'style_prefix' => [
            'title' => 'CSS prefix',
            'description' => 'Utiliza esta class css no HTML do Klaro! (remove os estilos prédefinidos)',
        ],
    ],
    'settings' => [
        'cookies' => [
            'label' => 'Cookies e Módulos',
            'description' => 'Gestão de Cookies e Módulos',
        ],
        'general' => [
            'label' => 'Definições Gerais',
            'description' => 'Configurar o plugin RGPD',
            'log_enabled' => [
                'label' => 'registar pedidos de cookies',
                'comment' => 'Pedidos de cookie aos utilizadores e as suas escolhas são guardadas',
            ],
            'ignore_useragents' => [
                'label' => 'Ignorar User agents',
                'comment' => 'Não guardar pedidos destes user agents',
            ],
        ],
        'cookie_consent' => [
            'label' => 'Consentimento de Cookies',
            'description' => 'Configurar o gestor Klaro!',
            'cookie_expires_after_days' => [
                'label' => 'Tempo de vida da cookie em dias ',
                'comment' => 'As escolhas dos utilizadores são guardadas por este número de dias',
            ],
            'privacy_policy' => [
                'label' => 'Politica de Privacidade',
                'comment' => 'Link absoluto ou relativo para a política  de privacidade',
            ],
            'default_application_state' => [
                'label' => 'Estado prédefinido para a aplicação',
                'comment' => 'Por predefinicção ativa o consentimento para todas as aplicações.',
            ],
            'must_consent' => [
                'label' => 'Consentimento Necessário',
                'comment' => 'Mostra o gestor de consentimento diretamente na primeira visualização da pagina para forçar uma escolha por parte do utilizador.',
            ],
            'lang' => [
                'label' => 'Código da lingua',
                'comment' => 'Todos os códigos disponíveis estão presentes na documentação Klaro!',
            ],
            'tabs' => [
                'translations' => 'Traduções',
                'apps' => 'Apps',
                'general' => 'Geral',
            ],
            'translations' => [
                'repeater' => [
                    'code' => [
                        'label' => 'Código da língua',
                    ],
                    'json' => [
                        'label' => 'JSON',
                    ],
                ],
            ],
            'apps' => [
                'repeater' => [
                    'name' => [
                        'label' => 'Nome',
                        'comment' => 'Um nome simples e curto para esta app (ex. google-analytics)',
                    ],
                    'application_state' => [
                        'label' => 'Ativar por predefinição',
                        'comment' => 'Ativar esta app por predefinição. Isto substitui a definição global',
                    ],
                    'required' => [
                        'label' => 'Consentimento é necessário',
                        'comment' => 'Esta app não pode ser desativada',
                    ],
                    'opt_out' => [
                        'label' => 'Opt-out',
                        'comment' => 'Os scripts desta app são carregados na primeira página carregada sem o  utilizador tenha dado consentimento.',
                    ],
                    'only_once' => [
                        'label' => 'Carregar os scripts apenas uma vez',
                        'comment' => 'Os scripts desta app são carregados apenas uma vez mesmo que o utilizador tente ativar múltiplas vezes.',
                    ],
                    'title' => [
                        'label' => 'Título',
                        'comment' => 'Nome que vai aparecer (ex. Google Analytics)',
                    ],
                    'purposes' => [
                        'label' => 'Objetivos',
                        'comment' => 'Estes objetivos tem  de ser traduzidos na secção de tradução. (ex. analytics, user-tracking)',
                    ],
                    'cookies' => [
                        'label' => 'Cookies desta app',
                        'comment' => 'Text or RegEx de nomes da cookie. Estas cookies são automaticamente removidas se o utilizador desativa esta app. (ex. /^_ga_.*$/ or custom_tracker_cookie)',
                    ],
                    'callback' => [
                        'label' => 'Função de callback',
                        'comment' => 'Esta função de JavaScript é chamada quando um utilizador ativa esta app.<br /><pre><small>function (consent, app) { // ... }</small></pre>',
                    ],
                ],
            ],
        ],
        'data_retention' => [
            'label' => ' Retenção de Dados',
            'description' => 'Configure a sua política de retenção de dados',
            'enabled' => [
                'label' => 'Limpeza ativada',
                'comment' => 'Eliminar dados antigas automaticamente depois de terem expirado',
            ],
            'default_keep_days' => [
                'label' => 'Eliminar dados depois de dias',
                'comment' => 'Válido para todos os plugins registados se nada especificado embaixo',
            ],
            'keep_days' => [
                'label' => 'Eliminar dados depois de dias',
            ],
        ],
        'info' => [
            'label' => 'Informações e Ajuda',
            'description' => 'Informações e Ajuda para Configurar',
            'bannerlaws_title' => 'Leis de Banner relacionadas com a localização de cada país',
            'cookieconsent_title' => 'Manual de utilizador para o Consentimento de Cookies',
            'cookiesmodulessetup_title' => 'Exemplo de coniguração de Cookies e Módulos',
            'cookiesmodulesuserguide_title' => 'Manual de utilizador para cookies e módulos',
            'dataretention_title' => 'Manual de utilizador para retenção de dados',
            'dpolinks_title' => 'Links de contacto para o DPO de cookies mais comuns',
            'overallinfo_title' => 'Informações sobre RGPD e privacidade digital',
            'index_title' => 'Bem vindo ao  OctoberCMS  GDPR and ePrivacy Plugin',
        ],
    ],
    'cookie_group' => [
        'fields' => [
            'name' => 'Nome de grupo',
            'initial_status' => 'Ativado no arranque',
            'initial_status_comment' => 'Isto vai permitar item ser ativado no  arranque, por favor recordar que a privacidade digital necessita que muitos itens estejam desativados por predefinição',
            'required' => 'Necessário para o Website funcionar corretamente',
            'required_comment' => 'Estas cookies e/ou módulos neste grupo são necessários para o website funcionar corretamente e por este modo não podem ser desativados pelo o utilizador.',
            'slug' => 'Slug',
            'default_level' => 'Este nivel é predefinido para o utilizador.',
        ],
        'tabs' => [
            'description' => 'Descrição',
            'cookies' => 'Cookies',
        ],
    ],
    'cookie' => [
        'fields' => [
            'name_owner' => 'Proprietário',
            'name_owner_comment' => 'Nome do Proprietário do serviço e.g. Google Analytics',
            'code' => 'Código',
            'code_comment' => 'Isto é gerado para o plugin funcionar (não é necessário alterar)',
            'intial_status' => 'Esta cookie está ativada por predefinição',
            'levels' => 'Níveis de Cookie',
            'item_details' => 'Detalhes do Item',
            'purpose' => 'Objetivo',
            'purpose_comment' => 'Sob ePrivacy Law (Artigo 4, para 11 e artigo 13, para 1, C e para 2, F), você necessita de descreber os objectivos deste uso, Processamento ou notificações e.g. \'Estas cookies são utilizadas pelo AddThis widget de partilha com o  objectivo de garantir que você consegue  ver a contagem atualizada quando você partilha a página\'.',
            'contact_details_dpo' => 'Detalhes de contacto do Data Controller',
            'contact_details_dpo_comment' => 'Sob a lei  de ePrivacy (Artigo 13, Para 1, A e 42), você tem de dar a morada do contacto do DPO  e.g. Cloudflare, Inc. 101 Townsend St. San Francisco, CA 94107. Attention: Data Protection Officer, privacyquestions@cloudflare.com (o endereço de email é opcional)',
            'contact_links_dpo' => 'Links de contactos do Data controller',
            'contact_links_dpo_comment' => 'Sob a lei de ePrivacy (Artigo 13, para 2, B, C e D), você necessita de dar links para \'direitos para reclamar a uma autoridade de Supervisão e para aceder à política de dados correta\' isto significa meios para ligar à política de privacidade, termos e condições, privacidade de cookies e outras paginas opt-out caso existam.',
            'contact_links_dpo_prompt' => 'Adicionar novo link',
            'contact_links' => [
                'name' => 'Texto',
                'href' => 'Link (URL absoluto)',
            ],
            'cookie_levels' => [
                'purpose_prompt' => 'Adicionar niveis de objectivos granulares',
                'purpose_label' => 'Niveis de Objetivos granulares',
                'section1_label' => 'Dica útil para Niveis de Objetivos granulares',
                'section1_comment' => 'Sob a lei de ePrivacy (Recital 32 e Artigo 29 working party guidance nov 2017), Usar um processo granular de Opt-In com a nossa ferramente de gestão de níveis. Isto significa ter uma definição desligada, ter uma definição básica, ter uma definição mais avançada. Um exemplo disto pode ser Google Analytics onde temos uma definição desligada, depois temos definição com definições básicas, e depois uma definição com tudo. O número de níveis depende do que se está a adicionar.',
                'section2_label' => 'Dicas úteis para detalhes de item',
                'section2_comment' => 'Voce pode listar quantos detalhes voce quiser, se for para uma cookie garanta que lista todos os names de identificação, por exemplo Google Analytics pode ter 8 ou mais nomes diferentes. Tambem garanta que tem igual numero de nome (identificação da cookie) Duração / Expiração e e tipo. Para encontrar a lista  de cookies do website no google chrome vá até Dev Tools > Application > Cookies. Tambem pode utilizar o website: https://cookiepedia.co.uk/ para encontrar cookies',
                'name' => 'Nome',
                'identification' => 'Nome (identificação da cookie)',
                'identification_comment' => 'O código do nome do prefixo da cookie e.g. \'_ga\'',
                'provider' => 'Fornecedor',
                'provider_comment' => 'Sob a lei de ePrivacy, voce necessita de demostrar o dominio do website (excluir https://, www e / no fim)',
                'purpose' => 'Objectivo',
                'purpose_comment' => 'Descreva o objectivo de uso em cada nível granular num único parágrafo. Artigo 5 exige que o consentimento é pedido numa maneira granular para objectivos \'específico, explícito\'.',
                'expiry' => 'Duração/Expiração',
                'expiry_comment' => 'Sob a lei de ePrivacy, você necessita de mostrar por quanto tempo vai ser utilizador no browser  e.g. SESSION, 3 meses, 2 anos.',
                'type' => 'Tipo',
                'type_comment' => 'Sob a lei de  ePrivacy, você necessita de mostrar qual o tipo de cookie e módulo, para facilitar nós criámos uma menu drop-down',
            ],
        ],
        'tabs' => [
            'contact' => 'Informações de contacto',
            'levels' => 'Níveis de Gestão',
            'provider' => 'Fornecedor',
            'item_details' => 'Gerir detalhes do item Item',
        ],
    ],
    'permissions' => [
        'manage_cookie_consent' => 'Pode gerir as definições dascookie',
        'manage_data_retention' => 'Pode gerir as políticas de retenção de dados',
        'manage_cookie_groups' => 'Pode gerir os grupos de cookies',
        'manage_logs' => 'Pode ver os registos de escolha',
    ],
    'log' => [
        'session_id' => 'ID da Sessão',
        'visited' => 'Visitado',
        'decided' => 'Decidido',
        'decision' => 'Decisão',
        'undecided' => 'Indeciso',
        'accepted' => 'Aceitado',
        'declined' => 'Rejeitado',
        'total' => 'Total',
        'total_logged' => 'Pedidos registados',
        'log' => 'Registo das Cookies',
        'log_comment' => 'Remover registos antigos',
    ],
];