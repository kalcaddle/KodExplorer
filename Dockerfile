FROM php:7.0-apache
# Enable php GD
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
    && docker-php-ext-install -j$(nproc) iconv mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd
COPY . /var/www/html/
RUN mkdir -p /var/www/html/data/User/admin/home/picture \
        && mkdir -p /var/www/html/data/User/admin/home/music \
        && mkdir -p /var/www/html/data/User/admin/home/download \
        && mkdir -p /var/www/html/data/thumb
RUN chmod -R a+w /var/www/html/data
