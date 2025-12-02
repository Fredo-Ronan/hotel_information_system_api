# Run migrations
sudo docker compose exec his_api php artisan migrate

echo ""
echo ""
echo "Migrations completed!"
echo "Now run 'passport_config.sh' to set up Laravel Passport."
