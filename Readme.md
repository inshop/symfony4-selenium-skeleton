docker-compose up -d
docker-compose exec --user=www-data php bash
./vendor/bin/simple-phpunit
