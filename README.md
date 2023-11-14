# Demo LAMP Stack

This project demonstrates how to setup an application using the LAMP Stack (Linux, Apache, MySQL, PHP) using Docker Compose.

### Requirements:

- Docker

### Recommendations:

- Docker Desktop (includes Docker)

<br>

## Start, stop and destroy it

### Run it:

- execute `docker compose up` in the terminal

### Stop it and destroy it:

- press `Ctrl + C` in the terminal
- execute `docker compose down` in the terminal

<br>

## Look at it

### Administer the databse with phpMyAdmin:

- localhost:8001

### Pages of the PHP application:

- localhost or localhost:80 or localhost/index.php
  - herefor you need to go in Docker Desktop into the `portal-1` container and execute `docker-php-ext-install mysqli`
- localhost/indexUsingPDO.php
  - herefor you need to go in Docker Desktop into the `portal-1` container and execute `docker-php-ext-install pdo pdo_mysql`
- localhost/test.php