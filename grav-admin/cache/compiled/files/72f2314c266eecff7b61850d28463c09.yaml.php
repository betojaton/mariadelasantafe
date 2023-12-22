<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/config/plugins/git-sync.yaml',
    'modified' => 1701984779,
    'size' => 857,
    'data' => [
        'enabled' => false,
        'folders' => [
            0 => 'pages',
            1 => 'themes',
            2 => 'plugins'
        ],
        'SyncNotice' => NULL,
        'sync' => [
            'on_save' => true,
            'on_delete' => true,
            'on_media' => true,
            'cron_enable' => false,
            'cron_at' => '0 12,23 * * *'
        ],
        'local_repository' => NULL,
        'repository' => 'https://github.com/betojaton/mariadelasantafe-grav.git',
        'no_user' => '0',
        'user' => 'betojaton@gmail.com',
        'password' => 'gitsync-def50200b97f24a6b1ab7aeb6c3c114296367c1e572ce36ac233ff70f7845d328ecab0257698930b5dc9a5bb51ab5cb36317b0318d4d2d2fb3807514b7512c2b1bb0d189dc653dea68471732e050d1ffd5f7b571132a9719034e7c',
        'webhook' => '/_git-sync-3dcab5308366',
        'webhook_enabled' => '0',
        'webhook_secret' => 'a4818c0ce1914a1e80975f6c607a9b42cc8bca66ecfc62d4',
        'branch' => 'main',
        'remote' => [
            'name' => 'origin',
            'branch' => 'main'
        ],
        'git' => [
            'author' => 'gituser',
            'message' => '(Grav GitSync) Automatic Commit',
            'name' => 'GitSync',
            'email' => 'git-sync@trilby.media',
            'bin' => 'git',
            'ignore' => NULL,
            'private_key' => NULL
        ],
        'logging' => false
    ]
];
