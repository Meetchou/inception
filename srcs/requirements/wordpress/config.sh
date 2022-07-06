wp core download --force --allow-root
wp config create --dbname="wordpress_db" --dbuser="kamanfo" --dbpass="12345" --dbhost="mariadb" --allow-root
wp core install --title=$WP_TITLE --admin_name=$WP_ADMIN_NAME --admin_password=$WP_ADMIN_PWD --admin_email=$WP_ADMIN_EMAIL --url=$DOMAIN_NAME --allow-root
php-fpm7.3 -F -R 
