FROM php:8.0-fpm-alpine
WORKDIR /app
RUN apk add --no-cache $PHPIZE_DEPS libzip-dev zip curl composer yarn
RUN docker-php-ext-install pdo_mysql bcmath zip
