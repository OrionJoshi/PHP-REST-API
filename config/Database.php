<?php
    class Database{
        //Database Parameters To Connect Database
        private $host = 'localhost';
        private $db_name = 'myblog';
        private $username = 'root';
        private $password = '';
        private $conn;

        //Database Connect
        public function connect(){
            $this->conn = null;

           try{
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username,$this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           }catch(PDOException $e){
                echo 'Connection Error: ' . $e->getMessage();
           } 

           return $this->conn;

        }
    }

?>