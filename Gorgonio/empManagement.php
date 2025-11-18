<?php
    include("db.php");
    include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Management</title>
</head>
<body>
    <a href="addEmployee.php">Add a Employee Here</a> || <a href="index.php">Back to Menu</a><br>
    <table>
        <th>
            <tr>ID</tr>
            <tr>Dept</tr>
            <tr>Lastname</tr>
            <tr>Firstname</tr>
            <tr>Rate/Hour</tr>
        </th>
        <br>
        <tbody>
            <?php
                echo showEmployees($conn);
            ?>
        </tbody>
    </table>
</body>
</html>