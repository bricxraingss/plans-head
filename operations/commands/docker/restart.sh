#!/bin/bash
# Maintainer: Bricx Carasco bricxcarasco.gss@gmail.com

RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
WHITE='\033[1;37m'
LIGHTGRAY='\033[0;37m'
LIGHTCYAN='\033[1;36m'
NOCOLOR='\033[0m'

echo "\n${YELLOW}Build and up all containers ...${NOCOLOR}\n"
docker-compose up -d --build

if [ ! -d "./src/vendor" ] 
then
    echo "\n${LIGHTCYAN}Composer install running..${NOCOLOR}\n"
    docker-compose run --rm composer install
else
    echo "\n${LIGHTCYAN}Composer update running..${NOCOLOR}\n"
    docker-compose run --rm composer update
fi

echo "\n${LIGHTGRAY}Clear views, routes, configurations and caches ...${NOCOLOR}\n"
docker-compose run --rm artisan optimize
sudo chmod 777 -R src/storage/ src/bootstrap/cache/

echo "\n${LIGHTCYAN}Process done ...${NOCOLOR}\n"
echo "${WHITE}Happy coding !! ${YELLOW}SMILE ${NOCOLOR}\n"