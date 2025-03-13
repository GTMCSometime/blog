FROM php:8.4.5RC1-fpm-alpine3.21

WORKDIR /var/www/laravel

RUN docker-php-ext-install pdo pdo_mysql