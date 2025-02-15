# Use the official PHP-Apache image
FROM php:8.1-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mysqli zip gd mbstring exif pcntl bcmath opcache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy Drupal files to the container
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html

# Install Composer dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --optimize-autoloader --no-dev

# Set permissions for Drupal
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
