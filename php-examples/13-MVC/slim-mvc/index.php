<?php
//namespace MVC;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

//require __DIR__ . '/controller.php';
require 'controller.php';

//$app = new \Slim\App;

// http://www.slimframework.com/docs/concepts/di.html
$configuration = [
    'settings' => [
        'displayErrorDetails' => true
    ]
];
//$c = new \Slim\Container($configuration);
$app = new \Slim\App($configuration);

//define some services
$container = $app->getContainer();
$container['hello'] = function($c) {
    //$settings = $c->get('settings')['hello'];
    
    return ':<';
};

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('templates', [
        'cache' => null,
    ]); 
    
    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

//Enable debugging (on by default)
//$app->config('debug', true);

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    //$response->getBody()->write("Hello, $name");
    
    // //$hello = $this->get('hello');
    // // OR
    //$hello = $this->hello;
    
    //$hello = (new \MVC\Controller())->hello();
    /*
    $c = new \MVC\Controller();
    $hello = $c->hello()
    */
    
    $hello = \MVC\Controller::hello($name);
    
    //return $response;
    return $response->getBody()->write($hello);
});

$app->get('/getallusers', function (Request $request, Response $response) {

    // model
    $users = \MVC\Controller::getAllUsers();
    
    //return $response;
    //$body = $response->getBody()->write($users);

    //return $response->withJson($users);
    
    return $this->view->render($response, 'getallusers.html', $users);
    
});

//$app->get('/hello2/{name}', 'SlimMVC\Controller:hello2');

//try 
//{
    $app->run();
//} catch (Exception $e) {
//    var_dump($e);
//}