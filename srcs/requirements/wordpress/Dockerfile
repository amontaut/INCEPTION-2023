FROM debian:buster

USER root
RUN apt-get update
USER root
RUN apt-get -y install php7.3 php-mysqli php-fpm

EXPOSE 9000

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
COPY ./tools /var/www/

RUN chmod a+x /var/www/launch_wp.sh

ENTRYPOINT [ "/var/www/launch_wp.sh" ]

CMD ["/usr/sbin/php-fpm7.3", "-F", "-R"]

