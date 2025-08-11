# Simple PHP Dockerfile for Render deployment
FROM php:8.3-cli

# Install required PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install zip pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy application files
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Set permissions
RUN chmod -R 755 runtime web/assets

# Expose port (Render will set this automatically)
EXPOSE $PORT

# Start PHP built-in server
CMD cd web && php -S 0.0.0.0:$PORT index.php
