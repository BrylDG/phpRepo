<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <h1>Welcome to the Home Page <?php echo $_SESSION["account"]?>!</h1>
    <h4>Choose your transaction:</h4>
    <a href="departments.php">Departments Managment</a>
    <a href="">Employee Managment</a>
    <a href="">Attendance Recording</a>
    <a href="">Attendance Management</a>
</body>

</html>