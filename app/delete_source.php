<?php

    // require '../config/database.php';
    
    // if (isset($_POST['sourceCode'])){
    //     $sourceId = (int) $_POST['sourceCode'];

    //     $query = 'DELETE FROM feeds WHERE id=' . $sourceId . ';';

    //     if (mysqli_query($connection, $query)) {
    //         $deletion = true;
    //         $message =  "Feed deleted successfully.";
    //     } else {
    //         $deletion = false;
    //         $message =  "Deletion failed: " . mysqli_error($connection);
    //     }
    // }else{
    //     $deletion = false;
    //     $message = "Deletion failed: no source selected.";
    // }

    $postData = array(
        'deletion'=>false,
        'message'=>"message",
    );

    echo json_encode($postData)."\n";

?>