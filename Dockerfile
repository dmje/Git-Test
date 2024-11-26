# Base image with Apache and PHP 8.2
FROM php:8.2-apache

# Set environment variables
ENV APACHE_DOCUMENT_ROOT /var/www/html

# Install additional PHP extensions (like mysqli for database connections)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite for clean URLs (optional but often useful)
RUN a2enmod rewrite

# Copy application code to the container
COPY . /var/www/html/

# Set the correct permissions (optional but recommended)
RUN chown -R www-data:www-data /var/www/html

# Expose the default Apache port
EXPOSE 80

# Start Apache service
CMD ["apache2-foreground"]
