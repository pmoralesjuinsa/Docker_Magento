FROM php:5.6-apache

RUN apt-get update && apt-get -y install \
    wget \
    unzip \
    libxml2-dev \
    libpng-dev \
    gcc \
    autoconf \
    automake \
    make \
    libc-dev \
    pkg-config

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli && a2enmod rewrite

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

#PARA MAGENTO ---------------------
RUN docker-php-ext-install dom
RUN docker-php-ext-install zip
RUN docker-php-ext-install pdo
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install pdo_mysql
#la extensión GD necesita libpng-dev instalado como hemos hecho arriba
RUN docker-php-ext-install gd
#la extensión SOAP necesita libxml2-dev instalado como hemos hecho arriba
RUN docker-php-ext-install soap

#--------------------------------------

RUN useradd -G www-data,root -u 1000 -d /home/devuser devuser
RUN mkdir -p /home/devuser/.composer && \
    chown -R devuser:devuser /home/devuser

#Configuración XDEBug
RUN pecl install xdebug-2.2.5
RUN docker-php-ext-enable xdebug
RUN echo 'xdebug.remote_port=9000' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.remote_enable=1' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.remote_connect_back=1' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.max_nesting_level=-1' >> /usr/local/etc/php/php.ini
RUN echo 'xdebug.profiler_enable_trigger=1' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.profiler_output_dir=/var/www/html' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.idekey = PHPSTORM' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.remote_autostart=1' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'date.timezone="Europe/Madrid"' >> /usr/local/etc/php/php.ini

RUN apt-get install -y mysql-client