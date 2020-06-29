FROM php:7.2-fpm-alpine

LABEL maintainer Bricx Carasco <bricxcarasco.gss@gmail.com>

RUN docker-php-ext-install pdo pdo_mysql