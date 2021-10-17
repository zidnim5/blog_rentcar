FROM php:7.3.22-fpm


WORKDIR /var/www
# Copy composer.lock and composer.json
# COPY composer.lock composer.json /var/www/

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
     apt-get -y install git libicu-dev libonig-dev libpng-dev libzip-dev libjpeg-dev libfreetype6-dev libxml2-dev unzip libpq-dev locales && \
     apt-get clean && \
     rm -rf /var/lib/apt/lists/* && \
     locale-gen en_US.UTF-8 && \
     localedef -f UTF-8 -i en_US en_US.UTF-8 && \
     mkdir /var/run/php-fpm && \
     docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
     --with-gd \
     --with-jpeg-dir \
     --with-png-dir \
     --with-zlib-dir && \
     docker-php-ext-install intl pgsql pdo pdo_pgsql gd zip bcmath exif && \
     composer config -g process-timeout 3600 && \
     composer config -g repos.packagist composer https://packagist.org

COPY ./sourcefiles/local.ini /usr/local/etc/php/conf.d/local.ini

RUN chown -R www-data:www-data /var/www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
