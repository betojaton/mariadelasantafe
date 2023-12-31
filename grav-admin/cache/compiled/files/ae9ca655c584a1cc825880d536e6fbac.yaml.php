<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/plugins/instagram/blueprints.yaml',
    'modified' => 1510321544,
    'size' => 1808,
    'data' => [
        'name' => 'Instagram',
        'version' => '1.3.0',
        'description' => '**Instagram** is a simple plugin that includes Instagram feed to your Grav website.',
        'icon' => 'instagram',
        'author' => [
            'name' => 'Igor Buyanov',
            'email' => 'artifex404@hotmail.com',
            'url' => 'https://github.com/artifex404/grav-plugin-instagram'
        ],
        'homepage' => 'https://github.com/artifex404/grav-plugin-instagram',
        'keywords' => 'instagram',
        'bugs' => 'https://github.com/artifex404/grav-plugin-instagram/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'feed_parameters' => [
                    'type' => 'section',
                    'title' => 'Feed Parameters',
                    'underline' => true,
                    'fields' => [
                        'feed_parameters.count' => [
                            'type' => 'text',
                            'size' => 'small',
                            'label' => 'Amount of feed items to show',
                            'placeholder' => 'Defaults to 7',
                            'default' => 7,
                            'validate' => [
                                'type' => 'number',
                                'min' => 1,
                                'max' => 20
                            ]
                        ],
                        'feed_parameters.cache_time' => [
                            'type' => 'text',
                            'size' => 'small',
                            'label' => 'Hours to cache the feed',
                            'placeholder' => 'Defaults to 1',
                            'default' => 1,
                            'validate' => [
                                'type' => 'number',
                                'min' => 1,
                                'max' => 65535
                            ]
                        ],
                        'feed_parameters.user_id' => [
                            'type' => 'text',
                            'size' => 'small',
                            'label' => 'User id',
                            'help' => 'Instagram user id whose feed will be shown',
                            'placeholder' => 'user id',
                            'default' => '',
                            'validate' => [
                                'type' => 'string'
                            ]
                        ],
                        'feed_parameters.access_token' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'Access token',
                            'help' => 'Instagram API access token',
                            'placeholder' => 'access token',
                            'default' => '',
                            'validate' => [
                                'type' => 'string'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
