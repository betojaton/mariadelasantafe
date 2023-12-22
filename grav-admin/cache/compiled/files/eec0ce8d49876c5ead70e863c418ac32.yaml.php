<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/plugins/social-media-links/blueprints.yaml',
    'modified' => 1702498567,
    'size' => 4662,
    'data' => [
        'name' => 'Social Media Links',
        'version' => '1.0.3',
        'description' => 'Add links to social media sites',
        'icon' => 'plug',
        'author' => [
            'name' => 'Torsten Sauer',
            'email' => 'grav-dev@torsten-sauer.de'
        ],
        'homepage' => 'https://github.com/torsten-sauer/social-media-links',
        'demo' => 'https://github.com/torsten-sauer/social-media-links',
        'keywords' => 'grav, plugin, social, media, facebook, twitter, instagram',
        'bugs' => 'https://github.com/torsten-sauer/social-media-links/issues',
        'docs' => 'https://github.com/torsten-sauer/social-media-links/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use Built in CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'Social Pages' => [
                    'type' => 'section',
                    'title' => 'Social Pages',
                    'underline' => true
                ],
                'social_pages_types' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'title' => 'Pages',
                    'fields' => [
                        'facebook' => [
                            'type' => 'tab',
                            'title' => 'Facebook',
                            'fields' => [
                                'social_pages.pages.facebook.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon',
                                    'default' => 'facebook',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.facebook.url' => [
                                    'type' => 'url',
                                    'label' => 'Your Facebook Profile URL',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.facebook.title' => [
                                    'type' => 'text',
                                    'label' => 'Title when icon hovered (optional)',
                                    'default' => 'Facebook',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.facebook.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Position',
                                    'default' => 1,
                                    'validate' => NULL
                                ]
                            ]
                        ],
                        'instagram' => [
                            'type' => 'tab',
                            'title' => 'Instagram',
                            'fields' => [
                                'social_pages.pages.instagram.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon',
                                    'default' => 'instagram',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.instagram.url' => [
                                    'type' => 'url',
                                    'label' => 'Your Instagram Profile URL',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.instagram.title' => [
                                    'type' => 'text',
                                    'label' => 'Title when icon hovered (optional)',
                                    'default' => 'Instagram',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.instagram.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Position',
                                    'default' => 4,
                                    'validate' => NULL
                                ]
                            ]
                        ],
                        'youtube' => [
                            'type' => 'tab',
                            'title' => 'Youtube',
                            'fields' => [
                                'social_pages.pages.youtube.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon',
                                    'default' => 'Youtube',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.youtube.url' => [
                                    'type' => 'url',
                                    'label' => 'Your Yyoutube Profile URL',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.youtube.title' => [
                                    'type' => 'text',
                                    'label' => 'Title when icon hovered (optional)',
                                    'default' => 'youtube',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.youtube.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Position',
                                    'default' => 5,
                                    'validate' => NULL
                                ]
                            ]
                        ],
                        'telegram' => [
                            'type' => 'tab',
                            'title' => 'Telegram',
                            'fields' => [
                                'social_pages.pages.telegram.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon',
                                    'default' => 'Telegram',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.telegram.url' => [
                                    'type' => 'url',
                                    'label' => 'Your Telegram Profile URL',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.telegram.title' => [
                                    'type' => 'text',
                                    'label' => 'Title when icon hovered (optional)',
                                    'default' => 'Telegram',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.telegram.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Position',
                                    'default' => 6,
                                    'validate' => NULL
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
