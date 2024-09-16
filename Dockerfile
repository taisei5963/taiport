# Use the official PHP image
FROM php:8.2.3-apache

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy all project files into the working directory
# COPY . .

# Copy project files for the web application
COPY ./web /var/www/html

# Copy config files to /var/www/config
COPY ./config /var/www/config

# Change the DocumentRoot to /var/www/html/web
RUN sed -i 's|/var/www/html|/var/www/html/web|' /etc/apache2/sites-available/000-default.conf

# Enable .htaccess overrides
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Enable mod_rewrite (if needed)
RUN a2enmod rewrite

# Set proper permissions for the web directory
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Set proper permissions for the config directory (if needed)
RUN chown -R www-data:www-data /var/www/config && chmod -R 755 /var/www/config

# Expose port 80
EXPOSE 80
