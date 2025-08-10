<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => isset($_ENV['DB_HOST']) ? 'pgsql:host=' . $_ENV['DB_HOST'] . ';dbname=' . ($_ENV['DB_NAME'] ?? 'attain_es_db') : 'mysql:host=localhost;dbname=attain_es_db',
            'username' => $_ENV['DB_USER'] ?? 'root',
            'password' => $_ENV['DB_PASSWORD'] ?? '',
            'charset' => 'utf8mb4',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => true,
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index',
                '/about' => 'site/about',
                '/services' => 'site/services',
                '/contact' => 'site/contact',
                '/solutions/<category>' => 'solutions/view',
            ],
        ],
    ],
];
