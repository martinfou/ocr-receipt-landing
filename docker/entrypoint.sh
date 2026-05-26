#!/bin/bash
set -e

# Create storage directories under the volume mount
mkdir -p /app/storage/app /app/storage/logs /app/storage/framework/cache/data \
  /app/storage/framework/sessions /app/storage/framework/views \
  /app/bootstrap/cache

# Create SQLite database file
touch /app/storage/app/database.sqlite 2>/dev/null || true

# Set proper permissions for www-data (PHP-FPM runs as www-data)
chmod -R 777 /app/storage 2>/dev/null || true
chmod -R 777 /app/bootstrap/cache 2>/dev/null || true

# Start php-fpm in daemon mode (may fail on first boot, that's OK)
php-fpm -D 2>/dev/null || true

# Run migrations
php artisan migrate --force 2>/dev/null || true

# Start nginx in foreground
exec nginx -g "daemon off;"
