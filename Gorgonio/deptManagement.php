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
    <a href="addDepartment.php">Add a Department Here</a> || <a href="index.php">Back to Menu</a><br>
    <table>
        <th>
            <tr>Code</tr>
            <tr>Name</tr>
            <tr>Head</tr>
            <tr>Tel. No.</tr>
            <tr>Actions</tr>
        </th>
        <br>
        <tbody>
            <?php
                echo showDepartments($conn);
            ?>
        </tbody>
    </table>
</body>
</html>