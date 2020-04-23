<?php 
    $user = new Users($_SESSION['id']);
    $_FILES['old_avatar']['name'] = $user->avatar;


    if(!empty($_POST) && isset($_POST['btnUpdate']) && isset($_FILES['old_avatar'])){

        if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_FILES['old_avatar'])){

            if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && ($_FILES['avatar']['size'] <= 1000000 && $_FILES['avatar']['size'] >= 0)){
                $pseudoUsr = secure_data($_POST['pseudo']);
                $emailUsr = secure_data($_POST['email']);
                $passwordUsr = secure_data($_POST['password']);

                $old_avatar_name = $_FILES['old_avatar']['name'];
                $avatar = $_FILES['avatar']['name'];

                if($avatar_name == null){
                    $avatar_name = $old_avatar_name;
                    // render_array( $avatar);
                }
                else{
                    $old_avatar_name = $avatar_name;
                    // render_array($avatar);
                }

                move_uploaded_file($_FILES['avatar']['tmp_name'],'assets/images/avatar/'.basename($avatar_name));

                $update = Users::updateUser($pseudoUsr,$emailUsr,$passwordUsr,$avatar_name,$user->id);
                header('Location:profil');

            }else{
                $error = "Une erreur à dû se produire,Rééssayez";
            }
    
        }else{
            $error = "Une erreur s'est produite,Rééssayez";
        }
    }