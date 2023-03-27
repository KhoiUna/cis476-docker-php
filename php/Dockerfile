# Instruct Docker to use this as a base image
FROM php:8.0-apache 

# Copy everything in local /php folder to container's /var/www/html
COPY . /var/www/html

# Run this command inside container
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli