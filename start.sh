#!/bin/bash

# change accordingly if composer.phar is not globally installed
# eg: composer.phar (for project based)
composer update

npm install

# Laravel migration with seeding operation
php artisan migrate:refresh --seed

gulp

php artisan serve
