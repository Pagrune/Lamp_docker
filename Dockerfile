FROM php:8.3.1-apache-bullseye

RUN docker-php-ext-install pdo pdo_mysql