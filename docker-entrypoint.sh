#!/bin/bash
set -e

# Create storage symlink if not already created
php artisan storage:link || true

# If SQLite is selected, ensure database file exists with correct permissions
if [ "$DB_CONNECTION" = "sqlite" ]; then
    mkdir -p /var/www/html/database
    touch /var/www/html/database/database.sqlite
    chown -R www-data:www-data /var/www/html/database
fi

# Ensure storage & cache permissions
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Production optimization caches
php artisan config:clear
php artisan route:cache || true
php artisan view:cache || true

# Run database migrations and seed products
echo "Running database migrations and seeders..."
php artisan migrate --force --seed || echo "[NOTICE] Migration skipped or already up to date."

# Start Apache in foreground
echo "Starting Apache web server on port 80..."
apache2-foreground
