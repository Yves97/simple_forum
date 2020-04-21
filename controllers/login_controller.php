<?php 


if(!empty($_POST) && isset($_POST['btnLogin'])){

    if(isset($_POST['password']) && isset($_POST['email'])){

        if(!empty($_POST['password']) && !empty($_POST['email'])){
            $email = secure_data($_POST['email']);
            $password = secure_data($_POST['password']);
            $usr = Users::getUser($email,$password);
            $_SESSION['id'] = $usr['id'];
            header('Location:forum');
        }else{
            $error = "Vous devez remplir tout les champs";
        }

    }else{
        $error = "Une erreur s'est produite,Rééssayez";
    }
}