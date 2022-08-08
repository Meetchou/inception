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

COPY ./wp-config.php /var/www/wp-config.php

COPY ./www.conf /etc/php/7.3/fpm/pool.d/www.conf

COPY ./wordpress /var/www/wordpress

RUN service php7.3-fpm start

RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN chmod +x wp-cli.phar

RUN mv wp-cli.phar /usr/local/bin/wp

COPY config.sh /home/config.sh

RUN chmod +x /home/config.sh

#WORKDIR /var/www/html

ENTRYPOINT ["/home/config.sh"] 
