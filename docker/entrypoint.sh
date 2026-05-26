#!/bin/bash
set -e

# Create storage directories under the volume mount
mkdir -p /app/storage/app /app/storage/framework/cache/data \
  /app/storage/framework/sessions /app/storage/framework/views \
  /app/storage/logs /app/bootstrap/cache

# Ensure database file exists
touch /app/storage/app/database.sqlite 2>/dev/null || true

# Set proper permissions
chown -R www-data:www-data /app/storage /app/bootstrap/cache 2>/dev/null || true

# Run Laravel setup on first deploy or after volume mount
php artisan storage:link --force 2>/dev/null || true

# Cache for production
php artisan config:cache --ansi 2>/dev/null || true
php artisan route:cache --ansi 2>/dev/null || true
php artisan view:cache --ansi 2>/dev/null || true

# Run migrations
php artisan migrate --force --ansi 2>/dev/null || true

# Start supervisor (runs nginx + php-fpm)
exec /usr/bin/supervisord -c /etc/supervisord.conf
