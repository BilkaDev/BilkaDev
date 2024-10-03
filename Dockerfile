# Używamy oficjalnego obrazu PHP z Apache
FROM php:7.4-apache

RUN docker-php-ext-install pdo pdo_mysql

# Skopiuj pliki projektu do katalogu domyślnego serwera WWW
COPY . /var/www/html/
