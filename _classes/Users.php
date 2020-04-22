<?php 

    class Users{
        //propriétés
        public $id;
        public $pseudo;
        public $email;
        public $password;
        public $avatar;
        
        /* constructeur */
        function __construct($id){
            global $db;
            $reqUser = $db->fetch('SELECT * FROM users WHERE id = ?',[$id],false);
            $data = $reqUser;

            $this->id = $id;
            $this->pseudo = $data['pseudo'];
            $this->email = $data['email'];
            $this->password = $data['password'];
            $this->avatar = $data['avatar'];
        }


        /* getter */
        public function getAllUsers(){
            global $db;
            $reqUsers = $db->fetch("SELECT * FROM users",[],true);
            return $reqUsers;
        }
        
        //get user with email,password
        public function getUser($email,$password){
            global $db;
            $reqUsr = $db->fetch("SELECT * FROM users
            WHERE email = ? 
            AND password = ?",[$email,$password],false);
            return $reqUsr;
        }

        //update user
        public function updateUser($pseudo,$email,$password,$avatar,$id){
            global $db;
            $reqUpdate = $db->execute("UPDATE users SET pseudo = ?,email = ?,password = ?, avatar = ? WHERE id = ?",[$pseudo,$email,$password,$avatar,$id]);
            return $reqUpdate;
        }

        //insert user
        public function insertUser($pseudo,$email,$password,$avatar){
            global $db;
            $reqInsert = $db->execute("INSERT INTO users(pseudo,email,password,avatar) VALUES(?,?,?,?)",[$pseudo,$email,$password,$avatar]);
            return $reqInsert;
        }

    }