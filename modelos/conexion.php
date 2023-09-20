<?php
class conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost:3308:dbname=web-4c", "soporte", "soporte");

        $link ->exec("set names utf8");

        return $link;
    }
}

?>