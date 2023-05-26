all: 
	docker-compose -f ./srcs/docker-compose.yml up -d

start:
	docker-compose -f ./srcs/docker-compose.yml up -d

re: nginx \
    mariadb \
    wordpress\
    start

down:
	docker-compose -f ./srcs/docker-compose.yml down

nginx:
	docker build -t srcs_nginx ./srcs/requirements/nginx

mariadb:
	docker build -t srcs_mariadb ./srcs/requirements/mariadb

wordpress:
	docker build -t srcs_wordpress ./srcs/requirements/wordpress

clean:	down 
	docker system prune -a
	docker volume rm WordPress DB

.PHONY: all start down clean re nginx mariadb wordpress

