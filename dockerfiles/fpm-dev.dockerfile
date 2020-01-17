FROM php:7.2-fpm

RUN apt-get -yqq update && apt-get install -yq \
        gnupg \
        libcurl4-openssl-dev \
        git \
        unzip \
        autoconf \
        build-essential \
        libmcrypt-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libicu-dev \
        libxml2-dev \
        libsodium-dev \
        libpcre3-dev \
        libhiredis-dev \
    && docker-php-ext-install bcmath curl hash iconv intl json mbstring mysqli opcache pcntl pdo pdo_mysql posix simplexml sodium zip \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && git clone https://github.com/nrk/phpiredis.git \
    && (cd phpiredis && phpize && ./configure --enable-phpiredis && make && make install) \
    && rm -r phpiredis \
    && docker-php-ext-enable phpiredis \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/bin --filename=composer \
    && php -r "unlink('composer-setup.php');" 
