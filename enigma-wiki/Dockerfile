FROM php:7.0.33-apache
RUN a2enmod rewrite
COPY 000-default.conf /etc/apache2/sites-available/

RUN apt-get update && apt-get install -y zip unzip git vim imagemagick
# intl
RUN apt install -y libicu-dev
RUN docker-php-ext-configure intl && docker-php-ext-install intl

# GD
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev libzip-dev zlib1g-dev exiftool
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ 
RUN docker-php-ext-install -j$(nproc) gd

#XSL
#RUN apt install -y libxslt-dev
#RUN docker-php-ext-install xsl

RUN docker-php-ext-install mysqli mbstring opcache exif pdo_mysql 
#calendar wddx sysvmsg sysvsem sysvshm sockets shmop pcntl gettext
RUN docker-php-ext-configure opcache --enable-opcache
#RUN pecl install apcu && docker-php-ext-enable apcu

ADD custom_wiki.tar.gz /var/www/html/
COPY LocalSettings.php /var/www/html/
WORKDIR /var/www/html/
# Maybe this should be a volume
RUN chmod -R 777 images/
