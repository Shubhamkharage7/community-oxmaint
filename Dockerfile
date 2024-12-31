# Use official PHP Apache image
FROM php:8.2-apache

# Enable Apache modules and PHP extensions
RUN a2enmod rewrite headers

# Set the working directory
WORKDIR /var/www/html

# Copy application files
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Configure Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Expose port 80
EXPOSE 80
