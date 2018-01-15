# Projet Zend

## Introduction

Ceci est le dépôt Git du projet Zend demandé en cours à l'ESGI.

## Installation


```bash
$ composer install
$ docker-compose up -d --build
$ docker-compose run --rm zf php vendor/bin/doctrine-module orm:schema-tool:update --force --dump-sql
```

Une fois installé, il ne reste plus qu'à vous rendre sur :

```bash
localhost:8180
```
Les accès sont :


```bash
user : root
password : demo
DB Name : demo
```