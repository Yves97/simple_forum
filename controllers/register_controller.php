<?php 
    // render_array($_POST);

    if(!empty($_POST) && isset($_POST['btnRegister'])){

        if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password'])){

            if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])){
                $pseudo = secure_data($_POST['pseudo']);
                $email = secure_data($_POST['email']);
                $password = secure_data($_POST['password']);
                
                $insert = Users::insertUser($pseudo,$email,$password);
                header('Location:login');

            }else{
                $error = "Ne laissez aucun champ vide";
            }
    
        }else{
            $error = "Une erreur s'est produite,Rééssayez";
        }
    }