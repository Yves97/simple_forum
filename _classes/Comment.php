<?php 
    class Comment{
        public $title;
        public $user;
        public $post;


        //get All Comment
        public function getCommentByPost($postId){
            global $db;
            $reqCommentByPost = $db->fetch("
            SELECT comment.*,users.*,post.* 
            FROM comment,users ,post 
            WHERE comment.user_id = users.id 
            AND comment.post_id = post.id 
            AND post.id = ?
            ",[$postId],true);
            return $reqCommentByPost;
        }
    }