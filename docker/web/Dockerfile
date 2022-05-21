FROM php:8.1-apache
# Install MySQL PDO client
RUN docker-php-ext-install pdo_mysql

# Copy Apache configuration
ADD https://github.com/amir-akhavans/ecs-project/blob/main/docker/web/000-default.conf /etc/apache2/sites-available/000-default.conf

# Copy code
ADD https://github.com/amir-akhavans/ecs-project/tree/main/public /var/www/public
