<?php

    require '../config/database.php';
    require '../resources/includes/validate_rss.php';
    
    $urlPost = $_POST['urlPost'];
    $urlPost = str_replace( '\/', '/', $urlPost);
    $validation = validateFeed($urlPost);
    if($validation){
        $message = 'You have imported a valid RSS-link!';
    }else{
        $message = 'You have imported an invalid link. Please try again!';
    }
    $post_data = array(
        'validation'=>$validation,
        'message'=>$message,
    );

    echo json_encode($post_data)."\n";

?>
