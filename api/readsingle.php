<?php

    //   headers
     header('Access-Control-Allow-Origin: *');
     header('Content-Type: application/json');

    //  initialize api

     

     include_once('../core/iniatialize.php');


    //  instantiate post class
    $post = new post($db);
    

    // blog post query

   $post->id = isset($_GET['id']) ? $_GET['id'] : die();
   $post->read_single();

   $post_arr = array(
       'id' =>$post->id,
       'title' =>$post->title,
       'body' =>$post->body,
       'author' =>$post->author,
       'category_id' =>$post->category_id,
       'category_name' =>$post->category_name,
   );


//    make json

print_r(json_encode($post_arr));

   



    
?>