<?php
    // render_array($_SESSION['id']);
    $user = new Users($_SESSION['id']);

    $post = Post::getPosts($_SESSION['id']);
    // render_array($post);


