#!/usr/bin/env bash
set -euo pipefail

# Blue Education — Production Deployment Script
# Usage: bash bin/deploy.sh

echo "==> Installing Composer dependencies (no dev)..."
composer install --no-dev --optimize-autoloader --no-interaction

echo "==> Running database migrations..."
php artisan migrate --force --no-interaction

echo "==> Building frontend assets..."
npm ci --production=false
npm run build

echo "==> Caching configuration, routes, views, and events..."
php artisan optimize
php artisan view:cache

echo "==> Generating sitemap..."
php artisan sitemap:generate

echo "==> Restarting queue workers..."
php artisan queue:restart

echo "==> Deployment complete!"
