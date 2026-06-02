FROM php:8.2-apache

# Habilitar el módulo de reescritura para que CodeIgniter funcione con URLs amigables
RUN a2enmod rewrite

# Mover el DocumentRoot a la carpeta public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Instalar dependencias necesarias para bases de datos
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar archivos
COPY . /var/www/html
RUN chown -R www-data:www-data /var/www/html