FROM php:8.1-fpm

RUN pecl install xdebug \
        && docker-php-ext-enable xdebug

COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini