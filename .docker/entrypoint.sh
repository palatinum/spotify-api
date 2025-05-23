#!/bin/sh
composer install --no-interaction
php artisan migrate --force
exec php-fpm
