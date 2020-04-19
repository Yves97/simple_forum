<?php 
        // echo $_GET['id'];
        render_array($_GET);
        $postId = $_GET['id'];
        $title = $_GET['title'];
        echo $postId;
        $userPost = new Post();
        render_array($userPost->getPostByUser($postId,$title));
        // echo $title;
        // $postUserId = new Post($postId);
        // render_array($postUserId);

    // $post = new Post(1,2);
    // render_array($post);