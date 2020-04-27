<?php 
    class Comment{
        public $title;
        public $user;
        public $post;

        /* constructeur */
        /*-------------- */
        
        //get All Comment in function of Post
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

        //---> add Comment
        public function addComment($response,$userId,$postId){
            global $db;
            $reqAddComment = $db->execute("INSERT INTO comment(response,user_id,post_id) VALUES(?,?,?)",[$response,$userId,$postId]);
            return $reqAddComment;
        }

        // count comment in function of postid from userId
        public function countResponses($postId){
            global $db;
            $reqCountRes = $db->fetch("
            SELECT COUNT(*) AS nb_responses
            FROM comment,users ,post 
            WHERE comment.user_id = users.id 
            AND comment.post_id = post.id 
            AND post.id = ?
            ",[$postId],false);
            return $reqCountRes;
        }

        //count comment in function of userId 
        // public function countAllRes($postId,$userId){
        //     global $db;
        //     $reqCountAllRes = $db->fetch("
        //     SELECT COUNT(*) AS nbr_responses FROM comment,post,users 
        //     WHERE post.user_id = users.id 
        //     AND post.id = comment.post_id 
        //     AND post.id = ?
        //     AND post.user_id = ?
        //     ",[$postId,$userId],false);
        //     return $reqCountAllRes;
        // }
    }