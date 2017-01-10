#Laravel

- http://laravel.com/
- https://laracasts.com/series/laravel-5-from-scratch

##Install

https://laravel.com/docs/5.3
```bash
# http://askubuntu.com/questions/764782/install-laravel-5-on-ubuntu-16-04
$ sudo apt-get install php5.6-mbstring php5.6-dom
(PHP 7.0)
$ sudo apt-get install php-mbstring php-dom

$ composer create-project --prefer-dist laravel/laravel blog
$ cd blog
c9.io:
$ php artisan serve --host $IP --port $PORT
```
Laravel commands:
```bash
$ php artisan
```

Debug true:
```php
// config/app.php
$ 'debug' => env('APP_DEBUG', true),
```
OR in '.env' file:
```
...
APP_DEBUG=true
APP_LOG_LEVEL=debug
...
```
Git clone repo issues:
- After clone repo install composer dependences:
```
$ composer install
```
- Copy/Update '.env' file




OLD CONFIGURATION!!!

http://laravel.com/docs/4.2/installation

```
$ composer global require "laravel/installer=~1.1"
```
This install Laravel in ~/.composer/vendor/bin

Change the system path in .bashrc:
```
export PATH=~/.composer/vendor/bin:$PATH
```
##Then you can run Laravel:

```
$ laravel
```
Create a new proyect called 'test':
```
$ laravel new test
```
###Run using php5 command line:
```
# install dependencies. Only once
$ sudo apt-get install php5-mcrypt
$ sudo php5enmod mcrypt
```
```
$ cd test
$ php artisan serve
```
```
http://localhost:8000
```
To access to 'users' route
```
http://localhost:8000/users
```

###Run using apache
```
$ sudo service apache2 restart
$ cd test
$ chgrp -R www-data app/storage
```
```
http://localhost/test/public/
```
To access to a 'users' route:
```
http://localhost/test/public/index.php/users
```
