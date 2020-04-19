<?php 
    require_once '_classes/DB_class.php';

    //--->connection a la base de donnée via la class DATABASE 

    $db = new DB(DATABASE_HOST,DATABASE_NAME,DATABASE_USER,DATABASE_PASSWORD);
    // echo 'connected';
    $db->setFetchMode(PDO::FETCH_ASSOC);