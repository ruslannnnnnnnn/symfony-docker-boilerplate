FROM php:8.2-fpm

RUN apt-get update \
  && apt-get install -y \
             libfreetype6-dev \
             libjpeg62-turbo-dev \
             libmcrypt-dev \
             libpng-dev \
             zlib1g-dev \
             libxml2-dev \
             libzip-dev \
             libonig-dev \
             graphviz \
             libcurl4-openssl-dev \
             pkg-config \
             libpq-dev \
             librabbitmq-dev \
             git

# Clear cache
RUN apt-get -y autoremove && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pgsql \
  && docker-php-ext-install pdo_pgsql \
  && docker-php-ext-configure intl \
  && docker-php-ext-install intl \
  && docker-php-ext-install zip \
  && docker-php-ext-install exif \
  && docker-php-ext-install opcache \
  && docker-php-source delete \
  && docker-php-ext-install sockets \
  && pecl install amqp \
  && docker-php-ext-enable amqp \
  && pecl install redis \
  && docker-php-ext-enable redis \
  && curl -s https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer \

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j$(nproc) gd \
  && docker-php-source delete

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

CMD ["/var/www/symfony/docker/php/entrypoint.sh"]
