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

#WORKDIR /var/www/html/

RUN mkdir -p /var/www/html

RUN wget https://wordpress.org/latest.tar.gz && \
tar -xvf latest.tar.gz && \
mv /wordpress/* /var/www/html/ && \
chown -R www-data:www-data /var/www/html && \ 
rm -r /wordpress latest.tar.gz

RUN chown -R www-data:www-data /var/www/html 

RUN mv ./var/www/html/wp-config-sample.php ./var/www/html/wp-config.php

COPY ./wp-config.php /var/www/html/wp-config.php

COPY ./www.conf /etc/php/7.3/fpm/pool.d/www.conf

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN chmod +x wp-cli.phar

RUN mv wp-cli.phar /usr/local/bin/wp

WORKDIR /var/www/html/

RUN service php7.3-fpm start

CMD wp core install --title=$WP_TITLE --admin_name=$WP_ADMIN_NAME --admin_password=$WP_ADMIN_PWD --admin_email=$WP_ADMIN_EMAIL --url=$DOMAIN_NAME --allow-root && wp user create $WP_USR $WP_EMAIL --user_pass=$WP_PWD --allow-root && php-fpm7.3 -F -R 
