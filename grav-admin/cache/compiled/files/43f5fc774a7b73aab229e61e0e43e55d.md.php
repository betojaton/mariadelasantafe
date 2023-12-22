<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/pages/01.blog/daring-fireball-link/item.md',
    'modified' => 1697128334,
    'size' => 412,
    'data' => [
        'header' => [
            'title' => 'DF Style Article Link',
            'date' => '13:34 07/23/2017',
            'continue_link' => true,
            'link' => 'http://daringfireball.net',
            'taxonomy' => [
                'category' => 'blog',
                'tag' => [
                    0 => 'journal',
                    1 => 'link'
                ]
            ]
        ],
        'frontmatter' => 'title: DF Style Article Link
date: 13:34 07/23/2017
continue_link: true
link: http://daringfireball.net
taxonomy:
    category: blog
    tag: [journal, link]',
        'markdown' => 'The blog skeleton also supports **Daring Fireball** style link posts.  Simply add a link setting in your page header:

```
link: http://daringfireball.net
```

And your blog title becomes a link directly to that link you specified. Easy peasy!

'
    ]
];
