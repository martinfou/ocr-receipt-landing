#!/bin/bash
set -e

echo "=== Starting up ==="

# Create storage dirs
mkdir -p /app/storage/app /app/storage/logs /app/storage/framework/cache/data \
  /app/storage/framework/sessions /app/storage/framework/views \
  /app/bootstrap/cache 2>&1

chown -R www-data:www-data /app/storage /app/bootstrap/cache 2>/dev/null || true
touch /app/storage/app/database.sqlite 2>/dev/null || true

# Test nginx config
echo "--- Testing nginx config ---"
nginx -t 2>&1

# Start php-fpm
echo "--- Starting PHP-FPM ---"
php-fpm -D 2>&1
echo "PHP-FPM exit code: $?"

# Start nginx foreground
echo "--- Starting Nginx ---"
exec nginx -g "daemon off;"
