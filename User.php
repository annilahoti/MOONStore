<?php
    class User{

        private $id;
        private $name;
        private $surname;
        private $email;

        private $password;

        private $role;

        private $editedBy;

        function __construct($id,$name,$surname,$email,$password,$role, $editedBy){
            $this->id=$id;
            $this->name=$name;
            $this->surname=$surname;
            $this->email=$email;
            $this->password=$password;
            $this->role=$role;
            $this->editedBy=$editedBy;
        }

        public function getId(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
        public function getSurname(){
            return $this->surname; 
        }
        function getEmail(){
            return $this->email;
        }
        function getPassword(){
            return $this->password;
        }
        function getRole(){
            return $this->role;
        }
        public function setName($name){
            $this->name=$name;
        }
        public function setSurname($surname){
            $this->surname=$surname;
        }
        public function setEmail($email){
            $this->email=$email;
        }
        public function setPassword($password){
            $this->password=$password;
        }
        public function setRole($role){
            $this->role=$role;
        }
        public function getEditedBy(){
            return $this->editedBy;
        }
        public function setEditedBy($editedBy){
            $this->editedBy=$editedBy;
        }
    }

?>