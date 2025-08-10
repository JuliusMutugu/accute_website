<?php
// Create necessary directories
$directories = [
    __DIR__ . '/runtime',
    __DIR__ . '/runtime/cache',
    __DIR__ . '/runtime/logs',
    __DIR__ . '/web/assets',
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Create basic autoloader for standalone deployment
if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
    echo "Composer dependencies not found. Installing...\n";
    if (file_exists(__DIR__ . '/composer.phar')) {
        exec('php composer.phar install --no-dev --optimize-autoloader');
    } else {
        echo "Please run: composer install --no-dev --optimize-autoloader\n";
        exit(1);
    }
}

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/yiisoft/yii2/Yii.php';

// Create common directory structure for standalone
if (!is_dir(__DIR__ . '/common')) {
    mkdir(__DIR__ . '/common', 0755, true);
    mkdir(__DIR__ . '/common/config', 0755, true);
    mkdir(__DIR__ . '/common/models', 0755, true);
}

echo "Frontend application initialized successfully!\n";
