<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/plugins/twigfeeds/twigfeeds.yaml',
    'modified' => 1697128344,
    'size' => 422,
    'data' => [
        'enabled' => true,
        'cache' => true,
        'static_cache' => false,
        'debug' => false,
        'cache_time' => 900,
        'pass_headers' => false,
        'silence_security' => false,
        'request_options' => [
            'allow_redirects' => true,
            'connect_timeout' => 30,
            'timeout' => 30,
            'http_errors' => false
        ],
        'twig_feeds' => [
            0 => [
                'source' => 'http://rss.nytimes.com/services/xml/rss/nyt/World.xml',
                'name' => 'NY Times',
                'start' => 0,
                'end' => 2
            ],
            1 => [
                'source' => 'http://feeds.bbci.co.uk/news/uk/rss.xml',
                'end' => 4,
                'cache_time' => 3600
            ]
        ]
    ]
];
