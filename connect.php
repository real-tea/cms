<?php
    $db_name="cms";

    $db_pass="";
    $db_user="root";
    $db_host="localhost";

    $connect =  mysqli_connect($db_host , $db_user , $db_pass , $db_name);

    if(!$connect){
        die("Database not connected");
        echo "error!";
    }
?>