<?php
    include("db.php");
    include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Department</title>
</head>
<body>
    <form action="addDepartment.php" method="GET">
        Department Code: <input type="text" name="depCode" placeholder="Department Code"><br>
        Department Name: <input type="text" name="depName" placeholder="Department Namee"><br>
        Department Head: <input type="text" name="depHead" placeholder="Department Head"><br>
        Department Telephone Number: <input type="text" name="depTelNo" placeholder="Department Telephone Number"><br>
        <input type="submit" name="addDepartment" value="add">
    </form>
</body>
</html>

<?php
    if(isset($_GET["addDepartment"])) {
        $depCode = $_GET['depCode'];
        $depName = $_GET['depName'];
        $depHead = $_GET['depHead'];
        $depTelNo = $_GET['depTelNo'];
        add($conn, "departments", $depCode, $depName, $depHead, $depTelNo, "");
    }
    else {
        echo "Didnt GET!";
    }
?>