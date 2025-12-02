#!/bin/bash

# Build and run the Docker containers
sudo docker compose up -d --build

# Set permissions for storage and cache directories
sudo docker compose exec his_api chmod -R 777 storage bootstrap/cache

# Generate application key
sudo docker compose exec his_api php artisan key:generate

echo ""
echo ""
echo "Docker containers are up and running."
echo "IMPORTANT! Please run 'sudo docker compose exec app php artisan migrate' or run 'migrate.sh' to set up the database."
