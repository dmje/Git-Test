FROM php:8.3-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy all PHP files
COPY . .

# Set permissions
RUN chown -R www-data:www-data /var/www/html
