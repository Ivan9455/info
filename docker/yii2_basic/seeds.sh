docker-compose up --build -d
docker exec -it yii2_docker_php_1 php yii migrate
docker exec -it yii2_docker_php_1 php vendor/bin/phinx seed:run -s UserSeeder -s CategorySeeder -s PostSeeder -s RatingSeeder -s BookmarkSeeder -s CommentSeeder