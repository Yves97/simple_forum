<?php 

    // Permet d'ajouter un autoloader
class Autoloader{
    static function register(){
        spl_autoload_register(function($class){
            include_once '_classes/'.$class.'.php';
        });
    }
}