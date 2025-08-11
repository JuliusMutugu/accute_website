# Simple PHP Dockerfile for Render deployment
FROM php:8.3-cli

# Install required PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install zip pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy composer files first for better Docker layer caching
COPY composer.json ./

# Install dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist \
    && composer dump-autoload --optimize \
    && composer clear-cache

# Copy application files
COPY . .

# Create necessary directories and set permissions
RUN mkdir -p runtime/logs runtime/cache web/assets \
    && chmod -R 755 runtime web/assets \
    && touch runtime/.gitkeep web/assets/.gitkeep

# Set proper environment for production
ENV YII_DEBUG=false
ENV YII_ENV=prod
ENV COMPOSER_ALLOW_SUPERUSER=1

# Expose port (Render will set this automatically)
EXPOSE $PORT

# Start PHP built-in server
CMD cd web && php -S 0.0.0.0:$PORT index.php
