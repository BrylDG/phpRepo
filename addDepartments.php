<?php
    require_once("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Departments</title>
</head>
<body>
    <h1>Add Department</h1>
    <form action="addDepartments.php" method="post">
        <label for="depCode">Code:</label>
        <input type="text" name="depCode" id="depCode" required>
        <label for="depName">Name:</label>
        <input type="text" name="depName" id="depName" required>
        <label for="depHead">Head:</label>
        <input type="text" name="depHead" id="depHead" required>
        <label for="depTelNo">Tel. No.:</label>
        <input type="text" name="depTelNo" id="depTelNo" required>
        <input type="submit" name="add" value="add">
        <a href="departments.php">cancel</a>
    </form>
</body>
</html>