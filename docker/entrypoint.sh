#!/bin/bash
set -e

# Create storage directories under the volume mount
mkdir -p /app/storage/app /app/storage/logs /app/storage/framework/cache/data \
  /app/storage/framework/sessions /app/storage/framework/views \
  /app/bootstrap/cache

# Set proper permissions
chown -R www-data:www-data /app/storage /app/bootstrap/cache 2>/dev/null || true

# Touch SQLite DB
touch /app/storage/app/database.sqlite 2>/dev/null || true

exec /usr/bin/supervisord -c /etc/supervisord.conf -n
