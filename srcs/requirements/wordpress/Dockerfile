FROM debian:buster

RUN apt-get update -y && \
apt-get upgrade -y && \
apt-get -y install mariadb-client 

RUN apt-get -y install \
php7.3 \
php-fpm \
php-cli \
wget \
curl \
php-mysql \
php-mbstring \
php-xml \
sendmail 

RUN mkdir -p /var/www/html

RUN chown -R www-data:www-data /var/www/html

COPY ./wp-config.php /var/www/wp-config.php

COPY ./www.conf /etc/php/7.3/fpm/pool.d/www.conf

RUN service php7.3-fpm start

COPY ./config.sh ./

RUN chmod +x ./config.sh

ENTRYPOINT ["./config.sh"] 
