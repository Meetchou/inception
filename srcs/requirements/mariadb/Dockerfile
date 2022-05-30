FROM debian:buster

RUN apt-get update -y
RUN apt-get upgrade -y

WORKDIR /var/www/

COPY ./tools/dbinfo.sql /var/www/

RUN mkdir -p /run/mysqld

RUN apt install mariadb-server -y

RUN service mysql start

RUN  mariadb -u root < /var/www/dbinfo.sql

RUN sed 's/bind-address           = 127.0.0.1/bind-address           = 0.0.0.0/'\ - i /etc/mysql/mariadb.conf.d/50-server.cnf

EXPOSE 3306

CMD ["mysqld"]
