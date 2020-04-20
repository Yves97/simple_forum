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

        //--->add Comment
        public function addComment($response,$userId,$postId){
            global $db;
            $reqAddComment = $db->execute("INSERT INTO comment(response,user_id,post_id) VALUES(?,?,?)",[$response,$userId,$postId]);
            return $reqAddComment;

        }
    }