FROM debian:buster

USER root
RUN apt-get update
USER root
RUN apt-get install -y mariadb-server

EXPOSE 3306

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools/users_db.sql /var/www/

RUN service mysql start && mysql < /var/www/users_db.sql;

CMD ["mysqld"]
