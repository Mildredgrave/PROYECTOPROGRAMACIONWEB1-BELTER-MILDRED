FROM php:8-apache

# Instalar extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN a2enmod rewrite

WORKDIR /var/www/html
