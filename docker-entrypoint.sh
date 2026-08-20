#!/bin/bash
set -e

# We are skipping migrations because you mentioned there is no database.
echo "No database configured. Skipping migrations..."

# Start Apache in foreground
echo "Starting Apache..."
apache2-foreground
