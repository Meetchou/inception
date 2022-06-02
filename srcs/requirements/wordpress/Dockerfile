FROM debian:buster

RUN apt-get update -y && \
apt-get upgrade -y && \
apt-get -y install \
php7.3 \
php-fpm \
php-cli \
wget \
curl \
php-mysql \
php-mbstring \
php-xml \
sendmail \
vim 

WORKDIR /var/www/html/

RUN wget https://wordpress.org/latest.tar.gz && \
tar -xvf latest.tar.gz \
&& mv wordpress/* . \
&& chown -R www-data:www-data . && \ 
rm -r wordpress latest.tar.gz

RUN mv ./wp-config-sample.php ./wp-config.php

COPY ./wp-config.php ./wp-config.php

COPY ./www.conf /etc/php/7.3/fpm/pool.d/www.conf

#CMD ["service php7.3-fpm start"]
CMD /bin/bash
