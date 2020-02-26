<?php
class Conexion {

    static public function conectar(){

        #PDO("Nombre del servidor; nombre de la base de datos", usuario, contraseña)

        $link =  new PDO("mysql:host=localhost;dbname=blog-php", "root", "");

        $link->exec("set names utf8");

        return $link;
    }
}
