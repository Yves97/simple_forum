<?php 

    class Users{
        //propriétés
        public $pseudo;
        public $email;
        public $password;
        
        /* constructeur */
        function __construct($id){
            global $db;
            $reqUser = $db->fetch('SELECT * FROM users WHERE id = ?',[$id],false);
            $data = $reqUser;

            $this->id = $id;
            $this->pseudo = $data['pseudo'];
            $this->email = $data['email'];
            $this->password = $data['password'];
        }


        /* getter */
        public function getAllUsers(){
            global $db;
            $reqUsers = $db->fetch("SELECT * FROM users",[],true);
            return $reqUsers;
        }

    }