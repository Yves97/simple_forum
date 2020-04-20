<?php 


if(!empty($_POST) && isset($_POST['btnLogin'])){

    if(isset($_POST['password']) && isset($_POST['email'])){

        if(!empty($_POST['password']) && !empty($_POST['email'])){
            $email = secure_data($_POST['email']);
            $password = secure_data($_POST['password']);
            $usr = new Users();
            $r = $usr->getUser($email,$password);
            render_array($r);
            $_SESSION['id'] = $r['id'];
            $_SESSION['pseudo'] = $r['pseudo'];
            header('Location:forum');
        }else{
            $error = "Vous devez remplir tout les champs";
        }

    }else{
        $error = "Une erreur s'est produite,Rééssayez";
    }
}