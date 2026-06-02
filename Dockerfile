FROM php:8.2-apache

# Habilitar reescritura
RUN a2enmod rewrite

# Instalar extensiones
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar nuestra configuración de Apache
COPY my-apache-config.conf /etc/apache2/sites-available/000-default.conf

# Copiar archivos
COPY . /var/www/html
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80