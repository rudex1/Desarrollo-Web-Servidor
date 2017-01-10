# Symfony

- http://symfony.com/get-started
- https://www.youtube.com/watch?v=GWlH-beIuW0&list=PL-9WnOL7eRJam-XUDSXhyO4b43T35feaA

##Installation

```
# Linux and macOS systems
$ sudo mkdir -p /usr/local/bin
$ sudo curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony
$ sudo chmod a+x /usr/local/bin/symfony

// if error, try:
$ sudo apt install php-xml
```
test
```
$ symfony
```

##Create your first project

```
$ symfony new myproject
$ cd myproject
```
###Run
cloud 9: Comment this code lines in 'web/config.php' 
```php
/*
if (!in_array(@$_SERVER['REMOTE_ADDR'], array(
    '127.0.0.1',
    '::1',
))) {
    header('HTTP/1.0 403 Forbidden');
    exit('This script is only accessible from localhost.');
}
*/
```
and in 'web/app_dev.php'
```php
/*
if (isset($_SERVER['HTTP_CLIENT_IP'])
    || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    || !(in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']) || php_sapi_name() === 'cli-server')
) {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}
*/
```
Run:
```
# C9: run web/app_dev.php

# console
$ php app/console server:run
# console C9
$ php bin/console server:run $IP:$PORT
#then: http://php-examples-zmwebdev.c9users.io:8080/app_dev.php/ OR http://php-examples-zmwebdev.c9users.io:8080/app_dev.php/
# OR http://php-examples-zmwebdev.c9users.io:8080/ OR http://php-examples-zmwebdev.c9users.io/

Config: http://localhost:8000/config.php
Developer: 
    - http://[SERVER]:[PORT]/app_dev.php
    - http://[SERVER]:[PORT]/app_dev.php/my/route
Production: http://[SERVER]:[PORT]/
```

##Debug
http://symfony.com/doc/current/debug/debugging.html

Comment this line:
```
// app_dev.php

// $kernel->loadClassCache();
```

```
 http://[SERVER]:[PORT]/app_dev.php/my/route
```


##Create first page
http://symfony.com/doc/current/page_creation.html

## Routing
http://symfony.com/doc/current/routing.html

```
# app/config/routing.yml
```
## The Controller

http://symfony.com/doc/current/quick_tour/the_controller.html

## The View

http://symfony.com/doc/current/quick_tour/the_view.html

http://twig.sensiolabs.org/documentation

Sublime Text with twig: http://stackoverflow.com/questions/26294305/twig-syntax-highlighting-sublime-text-2

## The Model
Doctrine ORM

- http://symfony.com/doc/current/doctrine.html
- http://docs.doctrine-project.org/en/latest/

```
# app/config/parameters.yml
# app/config/config.yml
```
### Create Database:
```
$ php bin/console doctrine:database:create
```
### Create Entity:
```
$ php bin/console doctrine:generate:entity
```
### Generate the missing getter and setter methods (?):
```
$ php bin/console doctrine:generate:entities AppBundle
```
### Create Database Table/Schema:
```
$ php bin/console doctrine:schema:update --force
```
### Other examples (no iteration):
```
php bin/console doctrine:generate:entity --no-interaction \
    --entity="AppBundle:Category" \
    --fields="name:string(255)"
```
- http://symfony.com/doc/current/doctrine/associations.html
- http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/association-mapping.html

### MongoDB:

https://symfony.com/doc/current/bundles/DoctrineMongoDBBundle/index.html

Error: upgrade to PHP >5.6 || 7: https://www.digitalocean.com/community/tutorials/how-to-upgrade-to-php-7-on-ubuntu-14-04

```
$ sudo add-apt-repository ppa:ondrej/php
$ sudo apt-get install php5.6
(OR php7)
```









