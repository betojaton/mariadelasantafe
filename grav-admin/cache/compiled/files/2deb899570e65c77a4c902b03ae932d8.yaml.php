<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\mariadelasantafe_org_ar\\grav-admin\\user\\plugins\\feed/blueprints/feed.yaml',
    'modified' => 1697128339,
    'size' => 447,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'blog' => [
                            'type' => 'tab',
                            'fields' => [
                                'header.feed.limit' => [
                                    'type' => 'text',
                                    'label' => 'Feed count',
                                    'default' => 10,
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ],
                                'header.feed.title' => [
                                    'type' => 'text',
                                    'label' => 'Feed title'
                                ],
                                'header.feed.description' => [
                                    'type' => 'text',
                                    'label' => 'Feed description'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
