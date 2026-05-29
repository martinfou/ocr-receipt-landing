#!/bin/bash
set -e

# Create storage directories under the volume mount
mkdir -p /app/storage/app /app/storage/logs /app/storage/framework/cache/data \
  /app/storage/framework/sessions /app/storage/framework/views \
  /app/storage/app/downloads \
  /app/bootstrap/cache

# Create SQLite database file
touch /app/storage/app/database.sqlite 2>/dev/null || true

# Fix ownership — the volume mount resets to root
chown -R www-data:www-data /app/storage /app/bootstrap/cache /tmp 2>/dev/null || true
chmod -R 775 /app/storage /app/bootstrap/cache 2>/dev/null || true

# Cache Laravel config + routes for production speed
php artisan config:cache 2>/dev/null || true
php artisan route:cache 2>/dev/null || true
php artisan view:cache 2>/dev/null || true

# Start php-fpm in daemon mode
php-fpm -D 2>/dev/null || true

# Run migrations
php artisan migrate --force 2>/dev/null || true

# Start nginx in foreground
exec nginx -g "daemon off;"
