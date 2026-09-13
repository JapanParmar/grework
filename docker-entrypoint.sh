#!/bin/bash
set -e

# 1. Ensure .env exists in container
if [ ! -f /var/www/html/.env ]; then
    echo "Creating .env from .env.example..."
    cp /var/www/html/.env.example /var/www/html/.env
fi

# 2. Ensure APP_KEY exists
if [ -z "$APP_KEY" ]; then
    echo "APP_KEY is not set in environment. Generating key..."
    php artisan key:generate --force
fi

# 3. Create public storage symlink
php artisan storage:link || true

# 4. Prepare SQLite database file and permissions
mkdir -p /var/www/html/database
touch /var/www/html/database/database.sqlite
chown -R www-data:www-data /var/www/html/database
chmod -R 775 /var/www/html/database
chmod 664 /var/www/html/database/database.sqlite

# 5. Ensure storage & bootstrap cache permissions
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# 6. Production optimization caches
php artisan config:clear
php artisan route:cache || true
php artisan view:cache || true

# 7. Run database migrations and seed products
echo "Running database migrations and seeders..."
php artisan migrate --force --seed || echo "[NOTICE] Migration completed or skipped."

# 8. Start Apache in foreground
echo "Starting Apache web server on port 80..."
apache2-foreground
