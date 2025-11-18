<?php
    include("db.php");
    include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>
    <form action="addemployee.php" method="GET">
        Employee ID: <input type="text" name="empID" placeholder="ID"><br>
        Department Code: <input type="text" name="depCode" placeholder="Department Code"><br>
        First Name: <input type="text" name="empFName" placeholder="First Name"><br>
        Last Name: <input type="text" name="empLName" placeholder="Last Name"><br>
        Rate per Hour: <input type="text" name="empRPH" placeholder="Rate Per Hour"><br>
        <input type="submit" name="addEmployee" value="add">
    </form>
</body>
</html>

<?php
    if(isset($_GET["addEmployee"])) {
        $empID = $_GET['empID'];
        $depCode = $_GET['depCode'];
        $empFName = $_GET['empFName'];
        $empLName = $_GET['empLName'];
        $empRPH = $_GET['empRPH'];
        add($conn, "employees", $empID, $depCode, $empFName, $empLName, $empRPH);
    }
    else {
        echo "Didnt GET!";
    }
?>