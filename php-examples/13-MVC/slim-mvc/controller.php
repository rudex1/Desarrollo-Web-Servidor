<?php
namespace MVC;

// controller

// require model
require 'model.php';
// require view
//require 'view.php';

class Controller 
{
    private $var = "var value";
    
    public function getTest() {
        return 'test';
    }
    
    // static ??
    public static function hello($name) {
        return "hello $name";
    }
    
    public static function getAllUsers() {
        
        $users = \MVC\Model::getAllUsers();
        
        return $users;
    }
    
}