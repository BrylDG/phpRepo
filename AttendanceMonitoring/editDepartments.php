<?php
    require_once("database.php");

    if(isset($_POST["update"])) {
        $depCode = $_POST["depCode"];
        $depName = $_POST["depName"];
        $depHead = $_POST["depHead"];
        $depTelNo = $_POST["depTelNo"];
        $originalDepCode = $_POST["originalDepCode"];
        $sql = "UPDATE departments SET depCode = '$depCode', depName = '$depName', depHead = '$depHead', depTelNo = '$depTelNo' WHERE depCode = $originalDepCode";
        
        if(mysqli_query($conn, $sql)){
            mysqli_close($conn);
            header("Location: departments.php");
            exit();
        } else {
            echo "Error Update";
        }

        header("Location: editDepartments.php");
        exit();
    }

    else {
    $originalDepCode = $_GET["depCode"];
    $sql = "SELECT * FROM departments WHERE depCode = $originalDepCode";
    $result = mysqli_query($conn, $sql);
    $department = mysqli_fetch_assoc($result);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Department</title>
</head>
<body>
    <h1>Edit Department</h1>
    <form action="editDepartments.php" method="post">
        <input type="hidden" id="originalDepCode" name="originalDepCode" value="<?php echo $originalDepCode?>">
        <label for="depCode">Code:</label>
        <input type="text" name="depCode" id="depCode" value="<?php echo $department["depCode"]?>" required>
        <label for="depName">Name:</label>
        <input type="text" name="depName" id="depName" value="<?php echo $department["depName"]?>" required>
        <label for="depHead">Head:</label>
        <input type="text" name="depHead" id="depHead" value="<?php echo $department["depHead"]?>" required>
        <label for="depTelNo">Tel. No.:</label>
        <input type="text" name="depTelNo" id="depTelNo" value="<?php echo $department["depTelNo"]?>" required>
        <input type="submit" name="update" value="update">
        <a href="departments.php">cancel</a>
    </form>
</body>
</html>