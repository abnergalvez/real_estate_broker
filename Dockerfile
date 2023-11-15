# Use the official PHP image as base
FROM php:8.0-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    vim \
    git \
    curl

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql

# Enable Apache Rewrite module
RUN a2enmod rewrite

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# Copy the composer.json and composer.lock files
COPY composer.json ./

# Copy the application code
COPY . .

RUN chgrp -R www-data storage bootstrap/cache
RUN chmod -R ug+rwx storage bootstrap/cache

# Install project dependencies
RUN composer install --no-scripts --no-autoloader

# Generate the autoloader
RUN composer dump-autoload --optimize

# Set the Apache document root
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf

# Enable Apache mod_rewrite for Laravel
RUN a2enmod rewrite

# Set up environment
RUN cp .env.example .env && \
    php artisan key:generate && \
    php artisan storage:link

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
