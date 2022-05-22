FROM php:8.1-apache
# Install MySQL PDO client
RUN docker-php-ext-install pdo_mysql

# Copy Apache configuration
COPY ./docker/web/000-default.conf /etc/apache2/sites-available/000-default.conf

# Copy code
COPY ./public /var/www/public
