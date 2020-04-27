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
            $this->date = $data['date'];
            $this->userId = $data['userid'];
        }

        //get All Post
        public function getAllPost(){
            global $db;
            $reqUsersPost = $db->fetch("
                SELECT users.pseudo,post.* 
                FROM users,post WHERE user_id = users.id
                ORDER BY post.date DESC",[],true);
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

        //insert post
        public function insertPost($title,$content,$userId){
            global $db;
            $reqInsert = $db->execute("
            INSERT INTO post(title,content,user_id) VALUES (?,?,?)
            ",[$title,$content,$userId]);
            return $reqInsert;
        }

        //get post by userId
        public function getPosts($userId){
            global $db;
            $reqPosts = $db->fetch("
            SELECT * FROM post WHERE user_id = ?
            ",[$userId],true);
            return $reqPosts;
        }

        //delete Post
        public function deletePost($postId){
            global $db;
            $reqDelete = $db->execute("
            DELETE FROM post WHERE id = ?
            ",[$postId]);
            return $reqDelete;
        }
    }