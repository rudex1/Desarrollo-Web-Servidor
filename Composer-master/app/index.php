<?php
    require_once 'vendor/autoload.php';
    
   // $usuario = new JVS\Usuario(); 
   
   //1.-configuracion bases de datos
    
    ORM::configure('mysql:host=localhost;dbname=composer-basic');
    ORM::configure('username', 'root');
    ORM::configure('password', '');
    
    //2.-configuracion de la clave primaria (si el nombre no es 'id')
    
   /* ORM::configure('id_column_overrides', array(
            'usuario' => 'id_usuario' 
            ) );*/
   
   $usuario = ORM::for_tables('usuario')->find_many();
   
   //nos muetras todos los nombres de la tabla usuarios
    /*foreach ($usuario as $nombre) {
        // code...
        echo $nombre->name ."<br>";
    }*/
    
    //con esto solo nos mostrara el nobre de la posicion que indicamso 
    $nombre = ORM::for_table('usuario')->find_one(5);
        echo $nombre->name;