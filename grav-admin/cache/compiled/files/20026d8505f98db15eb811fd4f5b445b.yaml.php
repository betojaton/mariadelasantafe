<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/plugins/facebook-feed/blueprints.yaml',
    'modified' => 1604470336,
    'size' => 3328,
    'data' => [
        'name' => 'Facebook Feed',
        'version' => '0.1.1',
        'description' => 'Insert your Facebook-Feed into your Site',
        'icon' => 'facebook',
        'author' => [
            'name' => 'Bjoern Bohr',
            'email' => 'bjoern.bohr@gmail.com'
        ],
        'homepage' => 'https://github.com/bit-it/facebook-feed',
        'keywords' => 'facebook',
        'bugs' => 'https://github.com/bit-it/facebook-feed/issues',
        'docs' => 'https://github.com/bit-it/facebook-feed/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'basics' => [
                    'type' => 'section',
                    'title' => 'Initial Setup',
                    'underline' => false
                ],
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
                'fb_settings.enableCSS' => [
                    'type' => 'toggle',
                    'label' => 'Enable default CSS',
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
                'fb_settings.page_id' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Facebook Page Id',
                    'placeholder' => 'Page Id',
                    'help' => 'To find your Id visit https://findmyfbid.com/',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'fb_settings.token' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Facebook Access Token',
                    'placeholder' => 'Access Token',
                    'help' => 'Visit https://developers.facebook.com to create an Facebook App',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'fb_settings.limit' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Limit Post Number',
                    'help' => 'Limits the number of Post the Plugin will show',
                    'default' => 10,
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'advanced' => [
                    'type' => 'section',
                    'title' => 'Component Setup',
                    'underline' => false
                ],
                'fb.headline' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Component Headline',
                    'placeholder' => 'Facebook Component',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'fb.postLinkTitle' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Post Link title',
                    'placeholder' => 'Enter Post Link Title',
                    'default' => 'Show Post',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'fb.postLinkAlt' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Post Link Fallback Alt Text',
                    'default' => 'Show Posts',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'fb.mainLinkTitle' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Facebook Page Link Title',
                    'placeholder' => 'Enter Facebook Page Link Title',
                    'default' => 'Visit Facebook',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'fb.mainLinkAlt' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Facebook Page Link Alt',
                    'default' => 'Visit Facebook',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'fallback' => [
                    'type' => 'section',
                    'title' => 'Fallback image Selection',
                    'underline' => false
                ],
                'fb.imgFallback' => [
                    'type' => 'file',
                    'size' => 'medium',
                    'label' => 'Upload Image Fallback',
                    'destination' => 'theme@:/media/facebook-feed',
                    'multiple' => false,
                    'accept' => [
                        0 => '.png',
                        1 => '.jpg',
                        2 => '.gif'
                    ]
                ],
                'fb.imgFallbackSelect' => [
                    'type' => 'filepicker',
                    'folder' => 'theme@:/media/facebook-feed',
                    'label' => 'Select Image Fallback',
                    'preview_images' => true,
                    'size' => 'medium',
                    'accept' => [
                        0 => '.png',
                        1 => '.jpg',
                        2 => '.gif'
                    ]
                ],
                'fb.imgFallbackAlt' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Image Fallback Alt Text',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'fb.imgFallbackTitle' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Image Fallback Title Text',
                    'validate' => [
                        'type' => 'string'
                    ]
                ]
            ]
        ]
    ]
];
