<?php 
    // render_array($_GET);
    $postId = $_GET['id'];
    $title = $_GET['title'];
    $userPost = new Post();
    $resultPost = $userPost->getPostByUser($_GET['id'],$_GET['title']);
    // render_array($resultPost);