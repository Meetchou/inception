FROM debian:buster

RUN apt-get update -y && apt-get upgrade -y && \
apt-get -y install nginx openssl

COPY ./conf/nginx.conf /etc/nginx/sites-available/default

RUN mkdir /etc/nginx/ssl

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/kamanfo.pem -out /etc/ssl/certs/kamanfo.crt -subj "/C=FR/ST=Paris/L=Paris/O=42/CN=Kamanfo/" 

EXPOSE 443

CMD /usr/sbin/nginx -g "daemon off;"
