<?php
    //Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/Post.php';

    //Instantiate Database and connect to Database
    $database = new Database();
    $db = $database->connect();

    //Instantiate blog post object
    $post = new Post($db);

    //Blog Post query
    $result = $post->read();

    //Get row count
    $num = $result->rowCount();

    //Check if any posts
    if($num > 0){
        //Post array Initaialize
        $post_arr = array();
        $post_arr['data'] = array();
    }else{

    }

?>