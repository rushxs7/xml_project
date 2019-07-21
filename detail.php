<?php

    require 'config/session.php';
    require 'config/database.php';
    require 'database/get_feed.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RSS Project - Details</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.css"><!-- FontAwesome 5.9.0 -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <!-- NAVBAR START -->
    <?php // require 'resources/modules/navbar.php'; ?>
    <!-- NAVBAR END -->

    <div class="container mt-3">
        <a class="btn btn-outline-primary" href="index.php"><i class="fas fa-arrow-left"></i> &nbsp; back to dashboard</a>
    </div>
    <div class="container my-3 p-4 bg-light rounded border">
        <div class="float-right"><img id="detailImage" class="rounded" src="<?php echo($xml->channel->image->url); ?>" alt="<?php echo($xml->channel->image->title); ?>"></div>
        <h3><?php echo($xml->channel->title); ?></h3>
        <p class="font-italic">
            <?php echo($xml->channel->description); ?>
        </p>
    </div>

    <?php
        foreach($xml->channel->item as $item){
    ?>

    <div class="container rounded bg-light p-4 mb-3 feed">
        <h5><?php echo($item->title); ?></h5>
        <div class="feedDescription"><?php echo($item->description); ?></div>
        <div class="float-right">
            <div class="btn-group">
                <a href="<?php echo("https://www.facebook.com/sharer.php?u=" . urlencode($item->link)); ?>" class="btn btn-primary" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="<?php echo("https://twitter.com/intent/tweet?url=" . urlencode($item->link) . "&hashtags=sharedWithRSSProject,PTC"); ?>" class="btn btn-primary" target="_blank"><i class="fab fa-twitter-square"></i></a>
            </div>
            <a href="<?php echo($item->link); ?>" class="btn btn-primary" target="_blank"><i class="fas fa-external-link-alt"></i>&nbsp;&nbsp;Open Link</a>
        </div>
        <div class="clearfix"></div>
    </div>

    <?php
        }
    ?>

    <!-- <div id="animator" class="wrapper" style="display: none;">
        <div class="box-wrap">
            <div class="box one"></div>
            <div class="box two"></div>
            <div class="box three"></div>
            <div class="box four"></div>
            <div class="box five"></div>
            <div class="box six"></div>
        </div>
    </div> -->
</body>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/sweetalert2.all.min.js"></script>
<!-- <script src="assets/js/script.js"></script> -->
</html>
