<?php 
    // get superGlobals
    // render_array($_GET);
    // exit;
    $postId = $_GET['id'];
    $sessionUser = new Users($_SESSION['id']);

    if(!empty($_POST) && isset($_POST['btnResponse'])){

        if(isset($_POST['response'])){

            if(!empty($_POST['response'])){
                $response = secure_data($_POST['response']);
                $addCmt = new Comment();
                $addCmt->addComment($response,$sessionUser->id,$postId);
                // exit;

            }else{
                $error = "Vous ne devez pas laisser ce champ vide !";
            }
    
        }else{
            $error = "Une erreur s'est produite,Rééssayez";
        }
    }
    
    //get Post By Users
    $userPost = Post::getPostByUserId($postId);
    // render_array($userPost);
    // exit;
    $commentsByPost = new Comment();
    $resultComments = $commentsByPost->getCommentByPost($postId);
    // render_array($resultComments);
    // exit;

    $nb_responses = Comment::countResponses($postId);
    // render_array($nb_responses);