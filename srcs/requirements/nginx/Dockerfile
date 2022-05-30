FROM debian:buster

RUN apt-get update
RUN apt-get install -y nginx
RUN apt-get install -y openssl

COPY ./conf/nginx.conf /etc/nginx/conf.d/default.conf

RUN mkdir /etc/nginx/ssl

RUN openssl req -newkey rsa:4096 -sha256 -x509 -days 365 -nodes -out \ 
	/etc/nginx/ssl/kamanfo.pem \
        -keyout /etc/nginx/ssl/kamanfo.key \
        -subj "/C=FR/ST=Paris/L=Paris/O=42/CN=Kamanfo/"

EXPOSE 443
EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
