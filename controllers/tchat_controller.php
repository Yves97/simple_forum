<?php 
    // render_array($_GET);
    $userId = $_GET['id'];
    $title = $_GET['title'];
    $userPost = new Post();
    $resultPost = $userPost->getPostByUser($userId,$title);
    // render_array($resultPost);

    $postId = $_GET['postId'];
    $commentsByPost = new Comment();
    $resultComments = $commentsByPost->getCommentByPost($postId);
    // render_array($resultComments);
    // var_dump($comments);
    // render_array($comments->getCommentByPost(1,2));