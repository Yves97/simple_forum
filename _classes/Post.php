<?php 
    class Post{
        public $id;
        public $title;
        public $content;
        public $date;
        public $userId;
        
        /* constructeur */
        function __construct($id){
            global $db;
            $reqUser = $db->fetch('SELECT * FROM post WHERE id = ?',[$id],false);
            $data = $reqUser;

            $this->id = $id;
            $this->pseudo = $data['title'];
            $this->email = $data['content'];
            $this->password = $data['date'];
            $this->avatar = $data['userid'];
        }

        ////get All Post
        public function getAllPost(){
            global $db;
            $reqUsersPost = $db->fetch("
                SELECT users.pseudo,post.* 
                FROM users,post WHERE user_id = users.id",[],true);
                return $reqUsersPost;
        }

        //get Post By User
        public function getPostByUserId($id){
            global $db;
            $reqPostUser = $db->fetch("
            SELECT post.*,users.pseudo FROM post,users
            WHERE post.user_id = users.id
            AND post.id = ?",[$id],true);
            return $reqPostUser;
        }
    }