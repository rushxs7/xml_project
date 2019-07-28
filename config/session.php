<?php

session_start();

if (!isset($_SESSION['formax'])){
    if ($_SESSION['formax'] == null){
        if (isset($_COOKIE['formax'])){
            $_SESSION['formax'] = $_COOKIE['formax'];
        }else{
            $_SESSION['formax'] = 10;
        }
    }
}


?>