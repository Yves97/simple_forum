<?php 
    class Post{
        public $id;
        public $title;
        public $content;
        public $date;
        public $userId;
        
        //get All Post
        public function getAllPost(){
            global $db;
            $reqPosts = $db->fetch("SELECT * FROM post",[],true);
            return $reqPosts;
        }

        //get Post By User
        public function getPostByUser($id,$title){
            global $db;
            $reqPostUser = $db->fetch("
            SELECT * FROM post 
            WHERE post.user_id = ?
            AND post.title = ?",[$id,$title],true);
            return $reqPostUser;
        }
    }