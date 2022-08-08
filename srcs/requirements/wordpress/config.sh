if [!-f /var/www/html/wp-config.php];then
	curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
	chmod +x wp-cli.phar
	wp-cli.phar /usr/local/bin/wp
	cd /var/www/html
	wp core download --allow-root;
	mv /var/www/wp-config.php /var/www/html/
	wp core install --title=$WP_TITLE --admin_name=$WP_ADMIN_NAME --admin_password=$WP_ADMIN_PWD --admin_email=$WP_ADMIN_EMAIL --url=$DOMAIN_NAME --allow-root
	wp user create $WP_USR $WP_EMAIL --user_pass=$WP_PWD --allow-root 
	php-fpm7.3 -F -R 

