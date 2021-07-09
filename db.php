<?php

    $db = new mysqli("localhost", "root", "", "equip2upgrade");

    if (mysqli_connect_errno()) {
        echo "Connection error" . mysqli_connect_error();
    }else {
        // echo "Connected";
    }
    
    session_start();

?>