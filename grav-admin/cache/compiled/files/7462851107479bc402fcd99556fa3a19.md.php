<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/pages/01.blog/blog.md',
    'modified' => 1703276704,
    'size' => 900,
    'data' => [
        'storage_key' => '01.blog',
        'header' => [
            'title' => 'Blog',
            'hide_git_sync_repo_link' => true,
            'sitemap' => [
                'changefreq' => 'monthly'
            ],
            'hero_classes' => 'text-light title-h1h2 hero-large parallax',
            'blog_url' => '/blog',
            'show_sidebar' => true,
            'show_breadcrumbs' => false,
            'show_pagination' => true,
            'modular_content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'folder',
                    'dir' => 'dsc'
                ]
            ],
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 6,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'bricklayer_layout' => true,
            'display_post_summary' => [
                'enabled' => false
            ],
            'feed' => [
                'limit' => 10,
                'description' => 'Blog de Maria de la Santa Fe'
            ],
            'pagination' => true,
            'child_type' => 'item',
            'media_order' => 'bg-body.webp',
            'hero_image' => 'bg-body.virgen.webp',
            'body_classes' => 'header-transparent header-animated',
            'header_image_alt_text' => 'maria de la santa fe',
            'external_links' => [
                'no_follow' => true
            ]
        ],
        'root' => false,
        'frontmatter' => 'title: Blog
hide_git_sync_repo_link: true
sitemap:
    changefreq: monthly
hero_classes: \'text-light title-h1h2 hero-large parallax\'
blog_url: /blog
show_sidebar: true
show_breadcrumbs: false
show_pagination: true
modular_content:
    items: \'@self.modular\'
    order:
        by: folder
        dir: dsc
content:
    items:
        - \'@self.children\'
    limit: 6
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
bricklayer_layout: true
display_post_summary:
    enabled: false
feed:
    limit: 10
    description: \'Blog de Maria de la Santa Fe\'
pagination: true
child_type: item
media_order: bg-body.webp
hero_image: bg-body.virgen.webp
body_classes: \'header-transparent header-animated\'
header_image_alt_text: \'maria de la santa fe\'',
        'markdown' => '# María de la Santa Fe
### Santa Fe ciudad elegida, Santa y Bendita.
',
        'slug' => 'blog',
        'name' => 'blog.md',
        'ordering' => true
    ]
];
