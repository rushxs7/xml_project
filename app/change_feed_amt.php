<?php

    require '../config/session.php';

    if (isset($_POST['feedAmt'])){
        if (isset($_POST['rememberAmount'])){
            setcookie('formax', $_POST['feedAmt'], time() + (86400 * 30), "/");
        }
        $_SESSION['formax'] = $_POST['feedAmt'];
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();

?>