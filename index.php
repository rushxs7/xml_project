<?php

    require 'config/session.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.css"><!-- FontAwesome 5.9.0 -->
    <link rel="stylesheet" href="assets/css/loader.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <!-- NAVBAR START -->
    <?php require 'resources/modules/navbar.php'; ?>
    <!-- NAVBAR END -->

    <div class="container">

        <!-- IMPORTBAR START -->
        <?php require 'resources/modules/importbar.php'; ?>
        <!-- IMPORTBAR END -->
        <div class="my-3">
            <hr>
        </div>
        <div id="feedContainer" class="row">
                        
        </div>

    </div>
    <div id="animator" class="wrapper" style="display: none;">
        <div class="box-wrap">
            <div class="box one"></div>
            <div class="box two"></div>
            <div class="box three"></div>
            <div class="box four"></div>
            <div class="box five"></div>
            <div class="box six"></div>
        </div>
    </div>
</body>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/sweetalert2.all.min.js"></script>
<script src="assets/js/script.js"></script>
</html>