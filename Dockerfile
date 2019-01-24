FROM php:7.1.3-apache

ENV DEBIAN_FRONTEND=noninteractive

# Install the PHP extensions I need for my personnal project (gd, mbstring, opcache)
RUN apt-get update && apt-get install -y libpng12-dev libjpeg-dev libpq-dev git mysql-client-5.5 wget \
	&& rm -rf /var/lib/apt/lists/* \
	&& docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr \
	&& docker-php-ext-install gd mbstring opcache pdo zip

RUN apt-get update && apt-get install -y apt-utils adduser curl nano debconf-utils bzip2 dialog locales-all zlib1g-dev libicu-dev g++ gcc  locales make build-essential

# Install the gmp and mcrypt extensions
RUN apt-get update -y
RUN apt-get install -y libgmp-dev re2c libmhash-dev libmcrypt-dev file
RUN ln -s /usr/include/x86_64-linux-gnu/gmp.h /usr/local/include/
RUN docker-php-ext-configure gmp 
RUN docker-php-ext-install gmp

# Install imap extension
RUN apt-get install -y openssl
RUN apt-get install -y libc-client-dev
RUN apt-get install -y libkrb5-dev 
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl
RUN docker-php-ext-install imap

# Install bz2
RUN apt-get install -y libbz2-dev
RUN docker-php-ext-install bz2


# Install mysql extension
RUN apt-get update && apt-get install -y --force-yes \
    freetds-dev \
 && rm -r /var/lib/apt/lists/* \
 && cp -s /usr/lib/x86_64-linux-gnu/libsybdb.so /usr/lib/ \
 #&& docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
 && docker-php-ext-install \
    pdo_mysql \
    pdo_dblib \
    pdo_pgsql

# Install Tokenizer
RUN docker-php-ext-install tokenizer

# Install ftp extension
RUN docker-php-ext-install ftp

# APC
RUN pear config-set php_ini /usr/local/etc/php/php.ini
RUN pecl config-set php_ini /usr/local/etc/php/php.ini
RUN pecl install apc

RUN a2enmod rewrite
RUN a2enmod expires
RUN a2enmod mime
RUN a2enmod filter
RUN a2enmod deflate
RUN a2enmod proxy_http
RUN a2enmod headers
RUN a2enmod php7

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN ln -s /usr/local/bin/composer /usr/bin/composer
RUN curl -sL https://deb.nodesource.com/setup | bash -
RUN apt-get install -y nodejs build-essential
RUN npm install -g phantomjs-prebuilt casperjs

# Edit PHP INI
RUN echo "memory_limit = 1G" > /usr/local/etc/php/php.ini
RUN echo "upload_max_filesize = 50M" >> /usr/local/etc/php/php.ini
RUN echo "post_max_size = 50M" >> /usr/local/etc/php/php.ini
RUN echo "max_input_time = 60" >> /usr/local/etc/php/php.ini
RUN echo "file_uploads = On" >> /usr/local/etc/php/php.ini
RUN echo "max_execution_time = 300" >> /usr/local/etc/php/php.ini
RUN echo "LimitRequestBody = 100000000" >> /usr/local/etc/php/php.ini
RUN echo "extension = php_gmp.so" >> /usr/local/etc/php/php.ini

# Clean after install
RUN apt-get autoremove -y && apt-get clean all

# Configuration for Apache
RUN rm -rf /etc/apache2/sites-enabled/000-default.conf
ADD apache/000-default.conf /etc/apache2/sites-available/
RUN ln -s /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-enabled/
RUN a2enmod rewrite

EXPOSE 80

# Change website folder rights and upload your website
RUN chown -R www-data:www-data /var/www/html
ADD ./sailing-schedules /var/www/html/

# Change working directory
WORKDIR /var/www/html

# Install and update laravel (rebuild into vendor folder)
RUN composer install

RUN composer install

#RUN php artisan view:clear
#RUN php artisan route:cache

# Laravel writing rights
RUN chgrp -R www-data /var/www/html/storage 
RUN chgrp -R www-data /var/www/html/bootstrap/cache
RUN chmod -R ug+rwx /var/www/html/storage 
RUN chmod -R ug+rwx /var/www/html/bootstrap/cache

# Change your local - here it's in french
RUN echo "locales locales/default_environment_locale select fr_FR.UTF-8" | debconf-set-selections \
&& echo "locales locales/locales_to_be_generated multiselect 'fr_FR.UTF-8 UTF-8'" | debconf-set-selections
RUN echo "Europe/Paris" > /etc/timezone && dpkg-reconfigure -f noninteractive tzdata

# Create Laravel folders (mandatory)
RUN mkdir -p /var/www/html/storage/framework
RUN mkdir -p /var/www/html/storage/framework/sessions
RUN mkdir -p /var/www/html/storage/framework/views
RUN mkdir -p /var/www/html/storage/meta
RUN mkdir -p /var/www/html/storage/cache


# Change folder permission
RUN chmod -R 0777 /var/www/html/storage/
RUN rm /var/www/html/public/storage

# Custom ini file in php conf folder
#COPY config/custom.ini /usr/local/etc/php/conf.d/


# Running artisan commands
RUN php artisan storage:link
RUN php artisan schedule:run &
CMD php artisan config:cache
CMD php artisan cache:clear

#RUN php /var/www/html/artisan cache:clear
#RUN php /var/www/html/artisan config:cache

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
