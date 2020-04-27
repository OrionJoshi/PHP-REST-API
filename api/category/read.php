<?php 
    //Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    
    //File included
    include_once '../../config/Database.php';
    include_once '../../models/category.php';

    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();
?>