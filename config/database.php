<?php

// INSERT MYSQL CREDENTIALS HERE
$host = '127.0.0.1';
$username = 'xmluser';
$password = 'xml123';
$database = 'xml_project';

$connection = mysqli_connect($host, $username, $password, $database);

if(!$connection){
    die("Connection failed: " . mysqli_connect_error($connection));
}

?>