#AUTHOR
author-ssh-php:
	docker exec -it udemy-lumen-author bash

author-down:
	docker-compose -f LumenAuthorApi/docker-compose.yml down

author-build:
	docker-compose -f LumenAuthorApi/docker-compose.yml build

author-up:
	docker-compose -f LumenAuthorApi/docker-compose.yml up -d

author-stop:
	docker-compose -f LumenAuthorApi/docker-compose.yml stop

#BOOK
book-ssh-php:
	docker exec -it udemy-lumen-book bash

book-down:
	docker-compose -f LumenBooksApi/docker-compose.yml down

book-build:
	docker-compose -f LumenBooksApi/docker-compose.yml build

book-up:
	docker-compose -f LumenBooksApi/docker-compose.yml up -d

book-stop:
	docker-compose -f LumenBooksApi/docker-compose.yml stop

#GATEWAY
gateway-ssh-php:
	docker exec -it udemy-lumen-gateway bash

gateway-down:
	docker-compose -f LumenGatewayApi/docker-compose.yml down

gateway-build:
	docker-compose -f LumenGatewayApi/docker-compose.yml build

gateway-up:
	docker-compose -f LumenGatewayApi/docker-compose.yml up -d

gateway-stop:
	docker-compose -f LumenGatewayApi/docker-compose.yml stop


#permisos
chown:
	sudo chown marcware:marcware -R LumenAuthorApi LumenBooksApi LumenGatewayApi

#ALL
all-up:
	make book-up
	make author-up
	make gateway-up
	docker ps
