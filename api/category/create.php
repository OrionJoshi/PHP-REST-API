<?php 
    //Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    //Include the Files
    include_once '../../config/Database.php';
    include_once '../../models/category.php';

    //Instantiate Database and connect to Database
    $database = new Database();
    $db = $database->connect();

    //Instantiate blog category object
    $category = new Category($db);

    //GET the raw category data
    $data = json_decode(file_get_contents("php://input"));
?>