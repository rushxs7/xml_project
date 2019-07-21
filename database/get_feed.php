<?php

    $query = "SELECT * FROM feeds WHERE id=" . (int)$_GET['id'] . " LIMIT 1;";

    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0){
        $feed = mysqli_fetch_assoc($result);
        $xml = simplexml_load_file($feed['rss_link']);
        $error = false;
    }else{
        $error = true;
    }

?>