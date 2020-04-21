<?php 
    $user = new Users($_SESSION['id']);  

    if(!empty($_POST) && isset($_POST['btnUpdate'])){

        if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password'])){

            if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])){
                $pseudoUsr = secure_data($_POST['pseudo']);
                $emailUsr = secure_data($_POST['email']);
                $passwordUsr = secure_data($_POST['password']);
                

                $update = Users::updateUser($pseudoUsr,$emailUsr,$passwordUsr,$user->id);
                header('Location:profil');

            }else{
                $error = "Une erreur à dû se produire,Rééssayez";
            }
    
        }else{
            $error = "Une erreur s'est produite,Rééssayez";
        }
    }