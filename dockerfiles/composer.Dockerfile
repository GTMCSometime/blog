FROM composer:latest

WORKDIR /var/www/laravel
COPY . .

ENTRYPOINT ["composer", "--ignore-platform-reqs"]