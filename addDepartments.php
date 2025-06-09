<?php
    require_once("database.php");

    if(isset($_POST["add"])) {
        $code = $_POST["depCode"];
        $name = $_POST["depName"];
        $head = $_POST["depHead"];
        $telno = $_POST["depTelNo"];
        $sql = "INSERT INTO departments VALUES ('$code', '$name', '$head', '$telno')";

        if(mysqli_query($conn, $sql)) {
            echo "Succesfully added";
            header("Location: departments.php");
            exit();
        } else {
            echo "failed to add";
        }

        mysqli_close($conn);
        header("Location: addDepartments.php");
        exit();
    }
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