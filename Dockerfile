# Use the official PHP image
FROM php:8.2.3-apache

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy project files
COPY ./web /var/www/html
COPY ./config /var/www/config

# Change the DocumentRoot to /var/www/html
RUN sed -i 's|/var/www/html|/var/www/html|' /etc/apache2/sites-available/000-default.conf

# Enable .htaccess overrides and mod_rewrite
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
RUN a2enmod rewrite

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html
RUN chown -R www-data:www-data /var/www/config && chmod -R 755 /var/www/config

# Expose port 80
EXPOSE 80
