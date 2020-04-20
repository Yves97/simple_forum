<?php 
    // get superGlobals
    $userId = $_GET['id'];
    $title = $_GET['title'];
    $postId = $_GET['postId'];
    $sessionUser = $_SESSION['id'];
    // var_dump($_POST);

    if(!empty($_POST) && isset($_POST['btnResponse'])){

        if(isset($_POST['response'])){

            if(!empty($_POST['response'])){
                $response = secure_data($_POST['response']);
                $addCmt = new Comment();
                $addCmt->addComment($response,$sessionUser,$postId);
                // exit;

            }else{
                $error = "Vous ne devez pas laisser ce champ vide !";
            }
    
        }else{
            $error = "Une erreur s'est produite,Rééssayez";
        }
    }
    
    //get Post By Users
    $userPost = new Post();
    $resultPost = $userPost->getPostByUser($userId,$title);
    $commentsByPost = new Comment();
    $resultComments = $commentsByPost->getCommentByPost($postId);