<?php

    require '../config/session.php';

    if (isset($_POST['feedAmt'])){
        $_SESSION['formax'] = $_POST['feedAmt'];
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();

?>