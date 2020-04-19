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

        //GET POSTs
        public function read(){
            //Create a Query
            $query = 'SELECT 
                    c.name as category_name,
                    p.id,
                    p.category_id,
                    p.title,
                    p.body,
                    p.author,
                    p.created_at
                FROM
                '. $this->table .' p
                LEFT JOIN
                    categories c ON p.category_id = c.id
                ORDER BY
                    p.created_at DESC';
        
            //Prepare statement
            $stmt = $this->conn->prepare($query);

            //Execute query
            $stmt->execute();
            
            return $stmt;
        }

        //Get Single Post
        public function read_single(){
             //Create a Query
            $query = 'SELECT 
            c.name as category_name,
            p.id,
            p.category_id,
            p.title,
            p.body,
            p.author,
            p.created_at
            FROM
            '. $this->table .' p
            LEFT JOIN
                categories c ON p.category_id = c.id
            WHERE
                p.id = ?
            LIMIT 0,1';

            //Prepare Statement
            $stmt = $this->conn->prepare($query);

            //Bind ID
            $stmt->bindParam(1, $this->id);
        }
    }

?>