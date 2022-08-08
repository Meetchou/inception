all:
	mkdir -p /home/kamanfo/data/mbdata
	mkdir -p /home/kamanfo/data/wordpress
	echo "127.0.0.1     kamanfo.42.fr" >> /etc/hosts
	DOCKER_DEFAULT_PLATFORM=linux/amd64 docker-compose up --build -d 

down:
	docker-compose down

clean:
	docker stop $$(docker ps -qa);\
	docker rm $$(docker ps -qa);\
	docker rmi -f $$(docker images -qa);\
	docker volume rm $$(docker volume ls -q);\
	docker network rm $$(docker network ls -q);\
	rm -rf /home/kamanfo/data/wordpress; \
	rm -rf /home/kamanfo/data/mbdata;

.PHONY: up down clean

