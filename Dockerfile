# Multi-stage build for Laravel on Fly.io

# ---- Build stage ----
FROM php:8.4-cli-alpine AS build

# System deps
RUN apk add --no-cache unzip curl git npm nodejs sqlite-dev

# Install composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# PHP extensions for Laravel
RUN docker-php-ext-install pdo pdo_sqlite bcmath

# Copy dependency files
COPY composer.json composer.lock ./
RUN COMPOSER_ALLOW_SUPERUSER=1 composer install --no-dev --no-interaction --no-progress --optimize-autoloader --no-scripts

# Copy package files
COPY package.json package-lock.json* ./
RUN npm ci 2>/dev/null || npm install

# Copy source
COPY . .

# Run post-autoload scripts now that artisan exists
RUN php artisan package:discover --ansi 2>/dev/null || true

# Build Vite assets
RUN npm run build

# ---- Runtime stage ----
FROM php:8.4-fpm-alpine AS runtime

# System deps
RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    sqlite \
    sqlite-dev \
    bash

# PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite bcmath opcache

# Copy application from build stage
COPY --from=build /app /app

# PHP config for production
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Create storage structure
RUN mkdir -p /app/storage/framework/cache/data \
    /app/storage/framework/sessions \
    /app/storage/framework/views \
    /app/storage/logs \
    /app/bootstrap/cache \
    /app/public/build

# Permissions
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache /app/public/build

# Nginx config
COPY docker/nginx.conf /etc/nginx/http.d/default.conf

# Supervisor config
RUN mkdir -p /etc/supervisor
COPY docker/supervisord.conf /etc/supervisord.conf

# Entrypoint
COPY docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

EXPOSE 8080

WORKDIR /app

ENTRYPOINT ["/entrypoint.sh"]
