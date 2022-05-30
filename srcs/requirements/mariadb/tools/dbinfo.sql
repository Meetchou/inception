CREATE USER 'kamanfo'@'%' IDENTIFIED BY '12345';
GRANT ALL ON wordpress_db.* TO 'kamanfo'@'%';
FLUSH PRIVILEGES;
