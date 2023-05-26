FROM debian:buster

RUN apt-get update
RUN apt-get install -y nginx openssl

RUN openssl req -x509 -new -out /etc/ssl/certs/mycert.crt -keyout /etc/ssl/private/mycert.key -days 365 -newkey rsa:4096 -sha256 -nodes -subj "/CN=amontaut.42.fr/OU=42Paris/O=42School/L=Paris/ST=IDF/C=FR";

EXPOSE 443

USER root
COPY ./conf/default /etc/nginx/sites-enabled/default

CMD ["nginx", "-g", "daemon off;"]
