#!/bin/bash
set -e

echo "-----> Installing PHP dependencies..."
composer install --no-dev --optimize-autoloader

echo "-----> Setting up application..."
php init.php

echo "-----> Setting permissions..."
chmod -R 755 runtime
chmod -R 755 web/assets

echo "-----> Build completed successfully!"
