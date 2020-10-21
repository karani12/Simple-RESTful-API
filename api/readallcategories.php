<?php

    //   headers
     header('Access-Control-Allow-Origin: *');
     header('Content-Type: application/json');

    //  initialize api

     

     include_once('../core/iniatialize.php');


    //  instantiate post class
    $post = new category($db);
    

    // blog post query

    $result = $post->read();


    // get the row count

    $num = $result->rowCount();

    if($num > 0){
        $post_arr =array();
        $post_arr['data'] = array();
        

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $post_item = array(
                'id' => $id,
                'name' => $name,
                'create_at' => ($created_at),
                'author' => $author,
                

            );
            array_push($post_arr['data'], $post_item);

        }
        // convert to json

        echo json_encode($post_arr);

    }else{
        echo json_encode (array('message' => 'No categories found'));

    }



    
?>