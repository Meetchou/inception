FROM debian:buster

RUN apt-get update -y && apt-get upgrade -y && apt install mariadb-server -y

#WORKDIR /var/www/

EXPOSE 3306

COPY ./tools/dbinfo.sql /var/www/

#RUN mkdir -p /run/mysqld

RUN service mysql start &&  mariadb -u root < /var/www/dbinfo.sql

COPY ./50-server.cnf /etc/mysql/mariadb.conf.d/

CMD ["mysqld"]
