# #
# #--------------------------------------------------------------------------
# # Image Setup
# #--------------------------------------------------------------------------
# #

# FROM php:8.1-fpm

# # Set Environment Variables
# ENV DEBIAN_FRONTEND noninteractive

# #
# #--------------------------------------------------------------------------
# # Software's Installation
# #--------------------------------------------------------------------------
# #
# # Installing tools and PHP extentions using "apt", "docker-php", "pecl",
# #

# # Install "curl", "libmemcached-dev", "libpq-dev", "libjpeg-dev",
# #         "libpng-dev", "libfreetype6-dev", "libssl-dev", "libmcrypt-dev",
# RUN set -eux; \
#     apt-get update; \
#     apt-get upgrade -y; \
#     apt-get install -y --no-install-recommends \
#             curl \
#             libmemcached-dev \
#             libz-dev \
#             libpq-dev \
#             libjpeg-dev \
#             libpng-dev \
#             libfreetype6-dev \
#             libssl-dev \
#             libwebp-dev \
#             libxpm-dev \
#             libmcrypt-dev \
#             libonig-dev; \
#     rm -rf /var/lib/apt/lists/*

# RUN set -eux; \
#     # Install the PHP pdo_mysql extention
#     docker-php-ext-install pdo_mysql; \
#     # Install the PHP pdo_pgsql extention
#     docker-php-ext-install pdo_pgsql; \
#     # Install the PHP gd library
#     docker-php-ext-configure gd \
#             --prefix=/usr \
#             --with-jpeg \
#             --with-webp \
#             --with-xpm \
#             --with-freetype; \
#     docker-php-ext-install gd; \
#     php -r 'var_dump(gd_info());'

# EXPOSE 9000
# CMD ["php-fpm"]

# YYYYYY

FROM php:8.1.12-fpm

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
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

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-configure gd \
            --prefix=/usr \
            --with-jpeg \
            --with-webp \
            --with-xpm \
            --with-freetype; \
# RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

RUN chown -R $USER:$USER /var/www

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]