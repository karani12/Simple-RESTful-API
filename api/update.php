<?php

    //   headers
     header('Access-Control-Allow-Origin: *');
     header('Content-Type: application/json');
     header('Access-Control-Allow_Methods: PUT');
     header('Access-Control-Allow-Headers: Access-Control_Allow_Headers, Content-Type, Access-Control-Allow-Methods,Authorization, X-Requested-With' );

    //  initialize api

     

     include_once('../core/iniatialize.php');


    //  instantiate post class
    $post = new post($db);

    // get postd data

    $data = json_decode(file_get_contents("php://input"));

    $post->id = $data->id;
    $post->title = $data->title;
    $post->body = $data->body;
    $post->author = $data->author;
    $post->category_id = $data->category_id;

    // create post

    if($post->update()){
        echo json_encode(
            array('message' => 'Post updated')
        );
    }else{

        echo json_encode(
            array('message' => 'Post not updated')
        );
    }
    








    
?>