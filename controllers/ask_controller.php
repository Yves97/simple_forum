<?php 
    render_array($_SESSION);
    render_array($_POST);
    // render_array($_POST);
    // render_array($_FILES);
    // exit;

    if(!empty($_POST) && isset($_POST['btnPost'])){
        

        if(isset($_POST['title']) && isset($_POST['content'])){
            // echo 'ok';
            // exit;
            if(!empty($_POST['title']) && !empty($_POST['content'])){
                // echo 'ok';
                // exit;
                $title = secure_data($_POST['title']);
                $content = secure_data($_POST['content']);
                $userId = $_SESSION['id'];
                //insert in database
                $insert = Post::insertPost($title,$content,$userId);
                header('Location:forum');

                }else{
                    $error = "Ne laissez aucun champ vide";
                }
            }else{
                $error = "Ne laissez aucun champ vide";
            }
        }