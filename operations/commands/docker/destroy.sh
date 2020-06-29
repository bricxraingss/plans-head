#!/bin/bash
# Maintainer: Bricx Carasco bricxcarasco.gss@gmail.com

RED='\033[0;31m'
LIGHTCYAN='\033[1;36m'

echo "\n${RED}Destroying all containers ...${NOCOLOR}\n"
docker-compose down

echo "\n${LIGHTCYAN}Process done ...${NOCOLOR}\n"