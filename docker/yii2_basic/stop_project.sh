#!/usr/bin/env bash
docker-compose stop
sudo rm -r docker/db/
docker rm $(docker ps -a -f status=exited -q)
docker image prune