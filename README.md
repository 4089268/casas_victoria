# casas_victoria
A web application built with the Laravel framework to manage properties, including houses and more.

## Minimum requirements

- php 8.22
- MySQL 8
- NodeJS 20
- npm 9.8.0
- [Composer](https://getcomposer.org/)

### Frameworks

- [Laravel 11](https://laravel.com/docs/11.x)
- [VueJS 3.2.41](https://vuejs.org/guide/introduction.html)

## Setup

- Create `.env` file

`cp .env.example .env`

> Save your sanity and use an .env file for your environment variables.

- Runs the migrations to create the tables in the database

`php artisan migrate`

- In order to standardize catalogs, seeders were created

`php artisan db:seed`

- Install composer dependencies

`composer install`

- Install JavaScript dependencies

`npm install`

- Build JS assets (Production environment)

`npm run build`

## Data encryption

We encrypt personal data such as name, RFC and CURP so it is necessary to establish an encryption key.

`php artisan key:generate`

## docker-compose.override

```yml
services:
  mysql:
    image: mysql:8
    restart: unless-stopped
    environment:
      MYSQL_DATABASE: db
      MYSQL_USER: sistemas
      MYSQL_PASSWORD: sistemas
      MYSQL_ROOT_PASSWORD: password
      MYSQL_ALLOW_EMPTY_PASSWORD: "yes"
    ports:
      - 3306:3306
    volumes:
      - dbdata:/var/lib/mysql
    networks:
      - casas-victoria

volumes:
  dbdata:
    driver: local
```
