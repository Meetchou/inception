all:
	mkdir -p /home/kamanfo/data/mbdata
	mkdir -p /home/kamanfo/data/wordpress
	@cp srcs/requirements/wordpress/index.html /home/kamanfo/data/wordpress
	docker-compose up --build -d 

down:
	docker-compose down

clean:
	@docker stop $$(docker ps -qa);\
	docker rm $$(docker ps -qa);\
	docker rmi -f $$(docker images -qa);\
	docker volume rm $$(docker volume ls -q);\
	docker network rm $$(docker network ls -q); 
	
.PHONY: up down fdown clean

