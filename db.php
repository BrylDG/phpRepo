<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "attendance";
    $conn = "";

    $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

    if($conn) {
        echo "Connected to database!";
    }
    else {
        echo "Not connected to database!";
    }
?>