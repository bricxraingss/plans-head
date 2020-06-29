# Dockerize Laravel Application

Dockerize Laravel application using containers such as nginx server, php, mysql with phpmyadmin, with additional containers such as composer, npm and artisan.

## Installation

Setup `.env` file in `src` folder. <br />
Run `sh avengers-assemble.sh` on the root folder of this repository.

### Notes

Run artisan commands like `php artisan migrate`, since it uses docker containers, use this command `docker-compose run --rm artisan migrate` to run artisan commands. 

## Usage

Local site URL
```bash
http://localhost:8880/ 
```

phpMyAdmin URL
```bash
http://localhost:8881/ 
```

## Developer

[Bricx Carasco](https://github.com/bricxcarasco)
