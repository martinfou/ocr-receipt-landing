#!/bin/bash
set -e

# Run Laravel setup on first deploy or after volume mount
php artisan storage:link --force 2>/dev/null || true

# Cache for production
php artisan config:cache --ansi 2>/dev/null || true
php artisan route:cache --ansi 2>/dev/null || true
php artisan view:cache --ansi 2>/dev/null || true

# Run migrations
php artisan migrate --force --ansi 2>/dev/null || true

# Start supervisor (runs nginx + php-fpm)
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
