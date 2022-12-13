FROM php:8.1.12-fpm

RUN apt-get update && apt-get install -y \
    apache2 \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /app
COPY composer.json .

RUN composer install --no-scripts
COPY . .

COPY docker/000-default.conf /etc/apache2/sites-available/000-default.conf
CMD php artisan optimize;php artisan serve --host=0.0.0.0 --port 8080