#!/bin/sh
composer install --no-interaction
php artisan key:generate
php artisan migrate --force
php artisan scramble:analyze
exec php-fpm
