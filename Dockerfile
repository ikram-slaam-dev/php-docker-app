# Use official PHP image with Apache
FROM php:8.3-apache

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . /var/www/html/

# Set appropriate permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose Apache port
EXPOSE 80

# Apache starts automatically using the base image's default command