<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/themes/quark-open-publishing/blueprints/blog.yaml',
    'modified' => 1697139146,
    'size' => 1899,
    'data' => [
        'title' => 'Blog Metadata',
        '@extends' => [
            'type' => 'blog',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'fields' => [
                        'blog' => [
                            'fields' => [
                                'appearance' => [
                                    'type' => 'section',
                                    'title' => 'Appearance',
                                    'underline' => true
                                ],
                                'header.bricklayer_layout' => [
                                    'type' => 'toggle',
                                    'label' => 'Use Bricklayer Layout',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.display_post_summary.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Hide Summaries on Blog Post Pages',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.post_icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Default Blog Item Font Awesome Icon',
                                    'description' => 'Short name, e.g. \'newspaper-o\'.',
                                    'help' => 'Determines the default Font Awesome icon used for the blog posts.',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'metadata' => [
                                    'type' => 'section',
                                    'title' => 'Page Metadata',
                                    'underline' => true
                                ],
                                'header.metadata' => [
                                    'type' => 'array',
                                    'label' => 'Metadata Items',
                                    'required' => true
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
