<?php

    //to check connection errors if any
    error_reporting(E_ALL);
    ini_set('display_errors', '1');


    $db_name="Blogger";

    $db_pass="";
    $db_user="root";
    $db_host="localhost";

    $conn =  mysqli_connect($db_host , $db_user , $db_pass , $db_name);

    if(!$conn){
        die("Database not connected");
        echo "error!";
    }
?>