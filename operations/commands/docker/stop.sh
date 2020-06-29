#!/bin/bash
# Maintainer: Bricx Carasco bricxcarasco.gss@gmail.com

RED='\033[0;31m'
LIGHTCYAN='\033[1;36m'

echo "\n${RED}Stopping all containers ...${NOCOLOR}\n"
docker stop plans-head-php plans-head-nginx-server plans-head-phpmyadmin plans-head-mysql-server

echo "\n${LIGHTCYAN}Process done ...${NOCOLOR}\n"