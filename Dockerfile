FROM php:8.2-apache

# Habilitar reescritura para CodeIgniter
RUN a2enmod rewrite

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Configurar Apache para usar el puerto que Railway asigne
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Apuntar a la carpeta public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Copiar archivos
COPY . /var/www/html
RUN chown -R www-data:www-data /var/www/html

# No necesitamos EXPOSE 80, usaremos la variable de entorno