# Use the official PHP 8.2 Apache image
FROM php:8.2-apache-buster

# Suppress interactive installation prompts
ARG DEBIAN_FRONTEND=noninteractive

# Update and install necessary packages
RUN apt-get update && apt-get -y --no-install-recommends install \
    libsodium-dev \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-install sockets pdo pdo_mysql mysqli sodium zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Enable necessary Apache modules
RUN a2enmod rewrite headers

# Add entrypoint script
ADD ./entrypoint.sh /docker/entrypoint.sh
RUN chmod +x /docker/entrypoint.sh

WORKDIR /var/www

ENTRYPOINT ["/docker/entrypoint.sh"]