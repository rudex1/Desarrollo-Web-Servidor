#Dependency manager: Composer
https://getcomposer.org/

Pre-installation in Ubuntu16:
```
$ sudo apt-get install curl php-cli php-mbstring git unzip
$ sudo apt-get install php-curl 
```
Install:
```
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
```
Create composer.json file:
```
$ touch composer.json
$ vim composer.json
{
    "require": {
        "monolog/monolog": "1.2.*"
    }
}
```
Use:
```
$ composer install
```
put this in the .php file:
```php
require 'vendor/autoload.php';
```
Other uses:
```
$ composer require ...
$ composer remove ...
```

###packages list
https://packagist.org
