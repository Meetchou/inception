#!bin/bash

RUN chown -R www-data:www-data /var/www/html

RUN chown -R 755 /var/www/html

if [ ! -f /var/www/html/wp-config.php ];then
	cd /var/www/html
	wp core download --allow-root;
	mv /var/www/wordpress/* /var/www/html/
	mv /var/www/wp-config.php /var/www/html/
	wp core install --title=$WP_TITLE --admin_name=$WP_ADMIN_NAME --admin_password=$WP_ADMIN_PWD --admin_email=$WP_ADMIN_EMAIL --url=$DOMAIN_NAME --allow-root
	wp user create $WP_USR $WP_EMAIL --user_pass=$WP_PWD --allow-root 
fi

php-fpm7.3 -F -R 
