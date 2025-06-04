<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "attendance";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
    }
    catch(mysqli_sql_exception) {
        echo "Not connected to database!";
    }


    if($conn) {
        echo "Connected to database!";
    }
?>