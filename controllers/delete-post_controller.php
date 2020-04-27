<?php
    $postId = $_GET['postid'];
    Post::deletePost($postId);
    header('Location:dashboard');