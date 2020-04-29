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

    //Instantiate category object
    $category = new Category($db);

    //Category read query
    $result = $category->read();

    //Get row count
    $num = $result->rowCount();

    //Check if any categories
    if($num > 0){
        //Category array
        $cat_arr = array();
        $cat_arr['data'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $cat_item = array(
                'id' => $id,
                'name' => $name
            );
        }
        
    }
?>