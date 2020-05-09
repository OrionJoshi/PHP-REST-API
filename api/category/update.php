<?php 

    //Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once '../../config/Database.php';
    include_once '../../models/category.php';

    //Instantiate Database and Connect to Database
    $database = new Database();
    $db = $database->connect();
    
    //Instantiate Category object
    $category = new Category($db);

    //Getting the raw data from request body
    $data = json_decode(file_get_contents("php://input"));

    //Set id and name to update
    $category->id = $data->id;
    $category->name = $data->name;
    ?>