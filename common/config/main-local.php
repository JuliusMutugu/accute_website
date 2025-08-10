<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => isset($_ENV['DB_HOST']) ? 'pgsql:host=' . $_ENV['DB_HOST'] . ';dbname=' . ($_ENV['DB_NAME'] ?? 'attain_es_db') : 'mysql:host=localhost;dbname=attain_es',
            'username' => $_ENV['DB_USER'] ?? 'root',
            'password' => $_ENV['DB_PASSWORD'] ?? '2587',
            'charset' => 'utf8mb4',
        ],
    ],
];
