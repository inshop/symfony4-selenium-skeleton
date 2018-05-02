FROM php:7.2.5-fpm

WORKDIR /var/www

RUN usermod -u 1000 www-data

RUN apt-get update
RUN apt-get install -y \
    libicu-dev \
    wget \
    curl \
    git \
    zip \
    unzip \
    zlib1g-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# php extensions
RUN docker-php-ext-install intl
RUN docker-php-ext-install zip

#clean
RUN apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
