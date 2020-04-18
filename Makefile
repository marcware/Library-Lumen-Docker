author-ssh-php:
	docker exec -it udemy-lumen-author bash

author-down:
	docker-compose -f LumenAuthorApi/docker-compose.yml down

author-build:
	docker-compose -f LumenAuthorApi/docker-compose.yml build

author-up:
	docker-compose -f LumenAuthorApi/docker-compose.yml up

author-stop:
	docker-compose -f LumenAuthorApi/docker-compose.yml stop


book-ssh-php:
	docker exec -it udemy-lumen-book bash

book-down:
	docker-compose -f LumenBooksApi/docker-compose.yml down

book-build:
	docker-compose -f LumenBooksApi/docker-compose.yml build

book-up:
	docker-compose -f LumenBooksApi/docker-compose.yml up

book-stop:
	docker-compose -f LumenBooksApi/docker-compose.yml stop