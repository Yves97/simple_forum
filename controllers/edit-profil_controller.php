<?php 
    $user = new Users($_SESSION['id']);  

    if(!empty($_POST) && isset($_POST['btnUpdate']) && isset($_FILES['avatar'])){

        if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0){

            if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && $_FILES['avatar']['size'] <= 1000000){
                $pseudoUsr = secure_data($_POST['pseudo']);
                $emailUsr = secure_data($_POST['email']);
                $passwordUsr = secure_data($_POST['password']);

                move_uploaded_file($_FILES['avatar']['tmp_name'],'assets/images/avatar/'.basename($_FILES['avatar']['name']));
                

                $update = Users::updateUser($pseudoUsr,$emailUsr,$passwordUsr,$_FILES['avatar']['name'],$user->id);
                header('Location:profil');

            }else{
                $error = "Une erreur à dû se produire,Rééssayez";
            }
    
        }else{
            $error = "Une erreur s'est produite,Rééssayez";
        }
    }