#!/bin/sh
echo "Composer install and dump-autoload"
composer i
composer dump-autoload
#echo "Run scout sync index"
#php artisan scout:sync-index-settings
#echo "Run Migration & Seeder"
#php artisan migrate
#php artisan module:migrate
echo "App install was successful"

/usr/bin/supervisord  -c "/etc/supervisor/conf.d/supervisord.conf"
