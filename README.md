# Projet Zend

## Introduction

Ceci est le dépôt Git du projet Zend demandé en cours à l'ESGI.
Le projet n'est pas mené à terme et ne fonctionne pas. Une erreur a bloqué ma progression et je n'ai pas réussi à la résoudre dans le temps imparti.

```bash
Argument 1 passed to Application\Controller\IndexController::__construct() must be an instance of Doctrine\ORM\EntityRepository, none given, called in /var/www/vendor/zendframework/zend-servicemanager/src/Factory/InvokableFactory.php on line 30
```

## Installation


```bash
$ composer install
$ docker-compose up -d --build
```

Une fois installé, il ne reste plus qu'à vous rendre sur :

```bash
localhost:8080
```
Les accès sont :


```bash
user : user
password : user
DB Name : zend
```