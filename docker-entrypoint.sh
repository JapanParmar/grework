#!/bin/bash
set -e

# Run Laravel migrations
echo "Running database migrations..."
php artisan migrate --force

# Start Apache in foreground
echo "Starting Apache..."
apache2-foreground
