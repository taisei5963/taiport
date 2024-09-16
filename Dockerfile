# Use the official PHP image
FROM php:8.2.3-apache

# Set the working directory
WORKDIR /var/www/html
WORKDIR /var/www/config

# Copy all project files into the working directory
COPY . .

# Install PHP dependencies if you have a composer.json
RUN if [ -f "composer.json" ]; then composer install; fi

# Expose port 80
EXPOSE 80
