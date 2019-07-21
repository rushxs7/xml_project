<?php

    require '../config/database.php';
    require '../resources/includes/validate_rss.php';
    
    $urlPost = $_POST['urlPost'];
    $urlPost = str_replace( '\/', '/', $urlPost);
    $validation = validateFeed($urlPost);
    if($validation){
        $message = 'You have imported a valid RSS-link!';
        $xml = simplexml_load_file($urlPost);
        $title = $xml->channel->title;
        $link = $xml->channel->link;
        $description = $xml->channel->description;
        $rss_link = $urlPost;
        if(isset($xml->channel->image)){
            $image = $xml->channel->image->url;
        }else{
            $image = "NULL";
        }
        $query = "INSERT INTO feeds (title, link, description, rss_link, image) VALUES ('" . $title . "', '" . $link . "', '" . $description . "', '" . $rss_link . "', '" . $image . "');";
        if(mysqli_query($connection, $query)){
            $insertion = true;
            $insertionMessage = "";
        }else{
            $insertion = false;
            $insertionMessage = "Import failed! " . mysqli_error($connection);
        }
    }else{
        $message = 'You have imported an invalid link. Please try again!';
    }
    $post_data = array(
        'validation'=>$validation,
        'message'=>$message,
        'insertion'=>$insertion,
        'insertionMessage'=>$insertionMessage,
    );

    echo json_encode($post_data)."\n";

?>
