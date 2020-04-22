<?php 
    // render_array($_POST);
    // render_array($_FILES);
    // exit;

    if(!empty($_POST) && isset($_POST['btnRegister']) && isset($_FILES['avatar'])){
        

        if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0){
            // echo 'ok';
            // exit;
            if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && $_FILES['avatar']['size'] <= 1000000 && $_FILES['avatar'] != ''){
                // echo 'ok';
                // exit;
                $pseudo = secure_data($_POST['pseudo']);
                $email = secure_data($_POST['email']);
                $password = secure_data($_POST['password']);

                //traitement des images
                $infosfichier = pathinfo($_FILES['avatar']['name']);
                $extension_upload = $infosfichier['extension'];
                $extension_autorisees = array('jpg', 'jpeg', 'gif', 'png','JPG','JPEG','GIF','PNG');
                if(in_array($extension_upload,$extension_autorisees)){

                    //répertoire de stockage définitif
                    move_uploaded_file($_FILES['avatar']['tmp_name'],'assets/images/avatar/'.basename($_FILES['avatar']['name']));
                
                    //insert in database
                    $insert = Users::insertUser($pseudo,$email,$password,$_FILES['avatar']['name']);
                    header('Location:login');

                }else{
                    $error = "Une erreur a du se produire réessayez";
                }
            }else{
                $error = "Ne laissez aucun champ vide";
            }
    
        }else{
            $error = "Une erreur s'est produite,Rééssayez";
        }
    }