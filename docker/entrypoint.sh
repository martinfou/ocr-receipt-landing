#!/bin/bash
set -e

# Create storage dirs under volume
mkdir -p /app/storage/app /app/storage/logs /app/storage/framework/cache/data \
  /app/storage/framework/sessions /app/storage/framework/views \
  /app/bootstrap/cache

chown -R www-data:www-data /app/storage /app/bootstrap/cache 2>/dev/null || true
touch /app/storage/app/database.sqlite 2>/dev/null || true

# Start php-fpm in background
php-fpm -D 2>&1
echo "PHP-FPM started: $?"

# Test nginx config
nginx -t 2>&1

# Start nginx in foreground
nginx -g "daemon off;"
