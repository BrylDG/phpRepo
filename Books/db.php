<?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "books";

    if ($conn = mysqli_connect($db_server, $db_username, $db_password, $db_name)) {
        echo "connected to database.";
    }
?>