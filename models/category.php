<?php 
    class Category{
        //DB Stuff
        private $conn;
        private $table = 'categories';

        // Category Properties
        public $id;
        public $name;
        public $created_at;

        // Constructor With DB
        public function __construct($db){
            $this->conn = $db;
        }
    }

?>