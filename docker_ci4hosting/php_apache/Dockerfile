FROM php:8.1-apache

# RUN apt-get update && apt-get install -y \
#         libfreetype6-dev \
#         libjpeg62-turbo-dev \
#         libpng-dev \
#     && docker-php-ext-configure gd --with-freetype --with-jpeg \
#     && docker-php-ext-install -j$(nproc) gd

#ENV APACHE_DOCUMENT_ROOT=/var/www/html/public_html
#RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
#RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y apt-utils
RUN a2enmod rewrite
RUN apt-get install -y libmcrypt-dev
RUN apt-get install -y libicu-dev
RUN docker-php-ext-install -j$(nproc) intl

# RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng12-dev
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev

# RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ 
#RUN docker-php-ext-configure gd --with-freetype --with-jpeg
#RUN docker-php-ext-install -j$(nproc) gd

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j "$(nproc)" gd

# RUN apt-get install -y php-apcu
# RUN apt-get install -y php-apc

RUN apt-get install -y libldb-dev
RUN apt-get install -y libldap2-dev
RUN apt-get install -y libxml2-dev
RUN apt-get install -y libssl-dev
RUN apt-get install -y libxslt-dev
RUN apt-get install -y libpq-dev
RUN apt-get install -y postgresql-client

# RUN apt-get install -y mysql-client 
RUN apt-get install -y default-mysql-client

RUN apt-get install -y mariadb-client 
RUN apt-get install -y libsqlite3-dev
RUN apt-get install -y libsqlite3-0
RUN apt-get install -y libc-client-dev
RUN apt-get install -y libkrb5-dev
RUN apt-get install -y curl

# RUN apt-get install -y libcurl3
# RUN apt-get install -y libcurl3-dev

RUN apt-get install -y libcurl4
RUN apt-get install -y openssl libssl-dev libcurl4-openssl-dev
# RUN apt-get install -y libcurl4-dev

RUN apt-get install -y firebird-dev
RUN apt-get install -y libpspell-dev
RUN apt-get install -y aspell-en
RUN apt-get install -y aspell-de  
RUN apt-get install -y libtidy-dev
RUN apt-get install -y libsnmp-dev
RUN apt-get install -y librecode0
RUN apt-get install -y librecode-dev

RUN apt-get install -y libzip-dev
RUN apt-get install -y zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer
#RUN pecl install apc
RUN docker-php-ext-install opcache
RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN docker-php-ext-install soap
RUN docker-php-ext-install ftp
RUN docker-php-ext-install xsl
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install calendar
RUN docker-php-ext-install ctype
RUN docker-php-ext-install dba
RUN docker-php-ext-install dom
RUN docker-php-ext-install zip
RUN docker-php-ext-install session
RUN docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu
RUN docker-php-ext-install ldap
# RUN pecl install json
# RUN docker-php-ext-install json
# RUN docker-php-ext-install hash
RUN docker-php-ext-install sockets
RUN docker-php-ext-install pdo
# RUN docker-php-ext-install mbstring
# RUN docker-php-ext-install tokenizer
RUN docker-php-ext-install pgsql
RUN docker-php-ext-install pdo_pgsql
RUN docker-php-ext-install pdo_mysql 
RUN docker-php-ext-install pdo_sqlite
RUN docker-php-ext-install intl

RUN apt-get install -y libmcrypt-dev
RUN pecl install mcrypt
# RUN docker-php-ext-install mcrypt

RUN docker-php-ext-install mysqli
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl
RUN docker-php-ext-install imap
#RUN docker-php-ext-install gd
RUN docker-php-ext-install curl
RUN docker-php-ext-install exif
RUN docker-php-ext-install fileinfo
RUN docker-php-ext-install gettext
#RUN apt-get install -y libgmp-dev # idk
#RUN docker-php-ext-install gmp # idk
RUN docker-php-ext-install iconv
# RUN docker-php-ext-install interbase
RUN docker-php-ext-install pdo_firebird
RUN docker-php-ext-install opcache
#RUN docker-php-ext-install oci8 # idk
#RUN docker-php-ext-install odbc # idk
RUN docker-php-ext-install pcntl
#RUN apt-get install -y freetds-dev # idk
#RUN docker-php-ext-install pdo_dblib  # idk
#RUN docker-php-ext-install pdo_oci # idk
#RUN docker-php-ext-install pdo_odbc # idk
RUN docker-php-ext-install phar
RUN docker-php-ext-install posix
RUN docker-php-ext-install pspell
#RUN apt-get install -y libreadline-dev # idk
#RUN docker-php-ext-install readline # idk

# RUN docker-php-ext-install recode
# RUN apt-get install -y php-recode 
# RUN docker-php-ext-enable recode

RUN docker-php-ext-install shmop
RUN docker-php-ext-install simplexml
RUN docker-php-ext-install snmp
RUN docker-php-ext-install sysvmsg
RUN docker-php-ext-install sysvsem
RUN docker-php-ext-install sysvshm
RUN docker-php-ext-install tidy
# RUN docker-php-ext-install wddx
RUN docker-php-ext-install xml
#RUN apt-get install -y libxml2-dev # idk
#RUN docker-php-ext-install xmlreader # idk
RUN #docker-php-ext-install xmlrpc
RUN docker-php-ext-install xmlwriter             
# idk bz2 enchant 

RUN apt-get install -y libbz2-dev
RUN docker-php-ext-install bz2

# RUN docker-php-ext-install timezonedb

RUN pecl install timezonedb 
RUN docker-php-ext-enable timezonedb

RUN pecl install mongodb 
RUN docker-php-ext-enable mongodb

RUN pecl install redis
RUN docker-php-ext-enable redis
