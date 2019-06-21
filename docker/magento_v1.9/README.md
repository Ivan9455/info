docker-compose up --build -d


docker-compose stop
sudo rm -r docker/db/
docker rm $(docker ps -a -f status=exited -q)
docker image prune

docker exec -it cinema_php_1 composer update

sudo chmod 755 -R src/
sudo chmod 577 -R src/app/etc/
sudo chmod 577 -R src/media/


