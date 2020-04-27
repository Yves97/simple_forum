<?php
//inclusion des fichiers principaux
include_once '_config/config.php';
include_once '_config/db.php';
include_once '_functions/functions.php';

include_once '_classes/Autoloader.php';
Autoloader::register();



// définition de la page courante
if(isset($_GET['page']) AND !empty($_GET['page'])){
    $page = trim(strtolower($_GET['page']));
}
else{
    $page = 'forum';
}

// Array contenant toutes les pages
$allpages = scandir('controllers/');
// var_dump($allpages);

// vérification de l'existance de la page
if(in_array($page.'_controller.php',$allpages)){
    //inclusion des pages ou de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';
    // if(!isset($_SESSION['id'])){
    //     header('Location:'.$page = 'forum');
    // }

}else{
    //retour d'une erreur
    echo 'erreur 404';
}