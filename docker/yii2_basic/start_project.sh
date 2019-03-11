#!/bin/bash
sudo chown www-data:www-data runtime/
sudo chmod 0775 -R runtime
sudo chmod 0557 -R web/assets
sudo chmod 0557 -R migrations/
cd docker/ &&  mkdir db && cd -
docker-compose up --build -d
docker exec -it yii2_docker_php_1 php yii migrate
#docker exec -it yii_docker_db_1 mysql -u root -p"123456" -h"127.0.0.1" -P"3307" -e"ALTER DATABASE `yii_db` COLLATE utf8_general_ci;exit;"