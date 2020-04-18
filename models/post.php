<?php
    class Post{
        //Database Stuff
        private $conn;
        private $table = 'posts';    //table type post

        //Post Properties
        public $id;
        public $category_id;
        public $category_name;
        public $title;
        public $body;
        public $author;
        public $created_at;

        //Constructor with DB

        public function __construct($db){
            $this->conn = $db;
        }
    }

?>