<?php
namespace MVC;

require 'db.php';


class Model {
    public static function getAllUsers() {
        /*
        $db = \MVC\Db::get();
        
        $stmt = $db->prepare('select * from users');
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        */
        
        $result = 
            [
                "Koxme" => ["id"=>1, "age"=>23],
                "Peru" => ["id"=>2, "age"=>27]
            ];
        
        return $result;
    }
}