<?php

    require '../config/database.php';
    
    if (isset($_POST['feed'])){
        $sourceId = (int) $_POST['feed'];

        $query = 'DELETE FROM feeds WHERE id=' . $sourceId . ';';

        if (mysqli_query($connection, $query)) {
            $deletion = true;
            $message =  "Feed deleted successfully. Reloading feeds...";
            if(mysqli_affected_rows($connection) <= 0){
                $deletion = false;
                $message =  "Deletion failed, tampering detected!";
            }
        } else {
            $deletion = false;
            $message =  "Deletion failed: " . mysqli_error($connection);
        }
    }else{
        $deletion = false;
        $message = "Deletion failed: no source selected.";
    }

    $postData = array(
        'deletion'=>$deletion,
        'message'=>$message,
    );

    echo(json_encode($postData) . "\n");

    mysqli_close($connection);
?>