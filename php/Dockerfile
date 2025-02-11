FROM php:8.2-apache

# Instalamos solo pdo_mysql sin mysqli
RUN docker-php-ext-install pdo_mysql

# Habilitamos mod_rewrite de Apache (si lo necesitas)
RUN a2enmod rewrite

# Instalar dependencias necesarias para Composer
RUN apt-get update && apt-get install -y unzip curl

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
