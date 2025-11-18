<?php
    include("db.php");
    include("functions.php");

    $data = getDepDetails($conn, $_GET["depCode"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Department</title>
</head>
<body>
    <form action="editDepartment.php" method="GET">
        Department Code: <input type="text" name="depCode" value="<?= $data['depCode'];?>"><br>
        Department Name: <input type="text" name="depName" value="<?= $data['depName'];?>"><br>
        Department Head: <input type="text" name="depHead" value="<?= $data['depHead'];?>"><br>
        Department Telephone Number: <input type="text" name="depTelNo" value="<?= $data['depTelNo'];?>"><br>
        <input type="submit" name="updateDepartment" value="Update">
    </form>
</body>
</html>

<?php
    if(isset($_GET["updateDepartment"])) {
        $depCode = $_GET['depCode'];
        $depName = $_GET['depName'];
        $depHead = $_GET['depHead'];
        $depTelNo = $_GET['depTelNo'];
        updateDepartment($data['depCode'], $depCode, $depHead, $depName, $depTelNo, $conn);
    }
    else {
        echo "Didnt Update!";
    }
?>