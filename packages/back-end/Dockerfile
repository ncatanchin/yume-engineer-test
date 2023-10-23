# Dockerfile
FROM php:8.2-fpm-alpine
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

RUN mkdir -p /www
WORKDIR /www

RUN apk update && apk upgrade
RUN apk add git

COPY . /www

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install

EXPOSE 8080

ENTRYPOINT [ "php", "artisan" ]
CMD [ "serve", "--port=8080", "--host=0.0.0.0" ]
