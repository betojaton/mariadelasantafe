<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/config/system.yaml',
    'modified' => 1703277853,
    'size' => 4609,
    'data' => [
        'absolute_urls' => true,
        'timezone' => 'America/Argentina/Cordoba',
        'default_locale' => NULL,
        'param_sep' => ':',
        'wrapped_site' => false,
        'reverse_proxy_setup' => false,
        'force_ssl' => false,
        'force_lowercase_urls' => true,
        'custom_base_url' => NULL,
        'username_regex' => '^[a-z0-9_-]{3,16}$',
        'pwd_regex' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}',
        'intl_enabled' => true,
        'http_x_forwarded' => [
            'protocol' => true,
            'host' => false,
            'port' => true,
            'ip' => true
        ],
        'languages' => [
            'supported' => [
                0 => 'es'
            ],
            'default_lang' => NULL,
            'include_default_lang' => false,
            'include_default_lang_file_extension' => false,
            'translations' => true,
            'translations_fallback' => true,
            'session_store_active' => false,
            'http_accept_language' => false,
            'override_locale' => false,
            'content_fallback' => [
                
            ],
            'pages_fallback_only' => false,
            'debug' => false
        ],
        'home' => [
            'alias' => '/blog',
            'hide_in_urls' => true
        ],
        'pages' => [
            'type' => 'regular',
            'dirs' => [
                0 => 'page://'
            ],
            'theme' => 'mytheme',
            'order' => [
                'by' => 'default',
                'dir' => 'asc'
            ],
            'list' => [
                'count' => 20
            ],
            'dateformat' => [
                'default' => 'd-m-Y H:i',
                'short' => 'jS M Y',
                'long' => 'F jS \\a\\t g:ia'
            ],
            'publish_dates' => true,
            'process' => [
                'markdown' => true,
                'twig' => true
            ],
            'twig_first' => false,
            'never_cache_twig' => false,
            'events' => [
                'page' => true,
                'twig' => true
            ],
            'markdown' => [
                'extra' => true,
                'auto_line_breaks' => false,
                'auto_url_links' => true,
                'escape_markup' => false,
                'special_chars' => [
                    '>' => 'gt',
                    '<' => 'lt'
                ],
                'valid_link_attributes' => [
                    0 => 'rel',
                    1 => 'target',
                    2 => 'id',
                    3 => 'class',
                    4 => 'classes'
                ]
            ],
            'types' => [
                0 => 'txt',
                1 => 'xml',
                2 => 'html',
                3 => 'htm',
                4 => 'json',
                5 => 'rss',
                6 => 'atom'
            ],
            'append_url_extension' => NULL,
            'expires' => 604800,
            'cache_control' => NULL,
            'last_modified' => false,
            'etag' => false,
            'vary_accept_encoding' => false,
            'redirect_default_code' => '301',
            'redirect_trailing_slash' => 1,
            'redirect_default_route' => 0,
            'ignore_files' => [
                0 => '.DS_Store'
            ],
            'ignore_folders' => [
                0 => '.git',
                1 => '.idea'
            ],
            'ignore_hidden' => true,
            'hide_empty_folders' => false,
            'url_taxonomy_filters' => false,
            'frontmatter' => [
                'process_twig' => false,
                'ignore_fields' => [
                    0 => 'form',
                    1 => 'forms'
                ]
            ]
        ],
        'cache' => [
            'enabled' => false,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g',
            'purge_at' => '0 4 * * *',
            'clear_at' => '0 3 * * *',
            'clear_job_type' => 'standard',
            'clear_images_by_default' => true,
            'cli_compatibility' => false,
            'lifetime' => 604800,
            'gzip' => false,
            'allow_webserver_gzip' => true,
            'redis' => [
                'socket' => '0',
                'password' => NULL,
                'database' => NULL,
                'server' => NULL,
                'port' => NULL
            ],
            'memcache' => [
                'server' => NULL,
                'port' => NULL
            ],
            'memcached' => [
                'server' => NULL,
                'port' => NULL
            ]
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => false,
            'undefined_functions' => true,
            'undefined_filters' => true,
            'safe_functions' => [
                
            ],
            'safe_filters' => [
                
            ],
            'umask_fix' => false
        ],
        'assets' => [
            'css_pipeline' => true,
            'css_pipeline_include_externals' => true,
            'css_pipeline_before_excludes' => true,
            'css_minify' => true,
            'css_minify_windows' => false,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_pipeline_include_externals' => true,
            'js_pipeline_before_excludes' => true,
            'js_module_pipeline' => false,
            'js_module_pipeline_include_externals' => true,
            'js_module_pipeline_before_excludes' => true,
            'js_minify' => true,
            'enable_asset_timestamp' => false,
            'enable_asset_sri' => false,
            'collections' => [
                'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
            ]
        ],
        'errors' => [
            'display' => 1,
            'log' => true
        ],
        'log' => [
            'handler' => 'file',
            'syslog' => [
                'facility' => 'local6',
                'tag' => 'grav'
            ]
        ],
        'debugger' => [
            'enabled' => true,
            'provider' => 'clockwork',
            'censored' => false,
            'shutdown' => [
                'close_connection' => true
            ],
            'twig' => true
        ],
        'images' => [
            'default_image_quality' => 85,
            'cache_all' => false,
            'cache_perms' => '0755',
            'debug' => false,
            'auto_fix_orientation' => false,
            'seofriendly' => false,
            'cls' => [
                'auto_sizes' => false,
                'aspect_ratio' => false,
                'retina_scale' => '1'
            ],
            'defaults' => [
                'loading' => 'auto'
            ],
            'watermark' => [
                'image' => 'system://images/watermark.png',
                'position_y' => 'center',
                'position_x' => 'center',
                'scale' => 33,
                'watermark_all' => false
            ]
        ],
        'media' => [
            'enable_media_timestamp' => false,
            'unsupported_inline_types' => NULL,
            'allowed_fallback_types' => NULL,
            'auto_metadata_exif' => false,
            'upload_limit' => 52428800
        ],
        'session' => [
            'enabled' => true,
            'initialize' => true,
            'timeout' => 1800,
            'name' => 'grav-site',
            'uniqueness' => 'path',
            'secure' => false,
            'secure_https' => true,
            'httponly' => true,
            'samesite' => 'Lax',
            'split' => true,
            'domain' => NULL,
            'path' => NULL
        ],
        'gpm' => [
            'releases' => 'stable',
            'official_gpm_only' => true,
            'method' => 'auto',
            'verify_peer' => true
        ],
        'http' => [
            'method' => 'auto',
            'enable_proxy' => true,
            'proxy_url' => NULL,
            'proxy_cert_path' => NULL,
            'concurrent_connections' => 5,
            'verify_peer' => false,
            'verify_host' => false
        ],
        'accounts' => [
            'type' => 'regular',
            'storage' => 'file',
            'avatar' => 'gravatar'
        ],
        'flex' => [
            'cache' => [
                'index' => [
                    'enabled' => true,
                    'lifetime' => 60
                ],
                'object' => [
                    'enabled' => true,
                    'lifetime' => 600
                ],
                'render' => [
                    'enabled' => true,
                    'lifetime' => 600
                ]
            ]
        ],
        'strict_mode' => [
            'yaml_compat' => true,
            'twig_compat' => true,
            'blueprint_compat' => true
        ]
    ]
];
