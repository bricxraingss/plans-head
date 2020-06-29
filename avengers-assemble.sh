#!/bin/bash
# Maintainer: Bricx Carasco bricxcarasco.gss@gmail.com

RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NOCOLOR='\033[0m'

echo "\n${RED}Stopping containers ...${NOCOLOR}\n"
docker stop laravel-php laravel-nginx-server laravel-mysql-server laravel-phpmyadmin

echo "\n${GREEN}Removing containers ...${NOCOLOR}\n"
docker rm laravel-php laravel-nginx-server laravel-mysql-server laravel-phpmyadmin

echo "\n${YELLOW}Build and up all containers ...${NOCOLOR}\n"
docker-compose up -d --build

if [ -d "./src/vendor" ] 
then
    echo "\n${RED}Composer install running..${NOCOLOR}\n"
    docker-compose run --rm composer install
fi

echo "\n${YELLOW}Clear views, routes, configurations and caches ...${NOCOLOR}\n"
docker-compose run --rm artisan optimize
sudo chmod 777 -R src/storage/ src/bootstrap/cache/

echo "\n${GREEN}Process done ...${NOCOLOR}\n"
echo "${YELLOW}Happy coding !! :-)${NOCOLOR}\n"