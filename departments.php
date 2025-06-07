<?php
include("db.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments Managment</title>
</head>
<body>
    <h1>Welcome to Departments Managment</h1>
    <form action="departments.php" method="post">
        <label>Code:</label>
        <input type="text" id="deptCode" name="deptCode">
        <label>Name:</label>
        <input type="text" id="deptName" name="deptName">
        <label>Head:</label>
        <input type="text" id="deptHead" name="deptHead">
        <label>Tel. No.:</label>
        <input type="text" id="deptTelNo" name="deptTelNo">
        <input type="submit" name="addDepartment" value="Add Department">
    </form>

    <?php
        echo "<table style='border: solid 1px black'>";
        echo "<tr>
                <th>
                    Code
                </th>
                <th>
                    Name
                </th>
                <th>
                    Head
                </th>
                <th>
                    Tel. No.
                </th>
              </tr>";
        $sql = "SELECT * FROM departments";

        $result = mysqli_query($conn, $sql);
        $datas = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($datas as $row) {
            echo "<tr>";
            echo "<td style='border: 1px solid black;'>{$row['depCode']}</td>";
            echo "<td style='border: 1px solid black;'>{$row['depName']}</td>";
            echo "<td style='border: 1px solid black;'>{$row['depHead']}</td>";
            echo "<td style='border: 1px solid black;'>{$row['depTelNo']}</td>";
        };
        echo "</table>";
    ?>
</body>
</html>
<?php
    if(isset($_POST["addDepartment"])) {
        $code = $_POST["deptCode"];
        $name = $_POST["deptName"];
        $head = $_POST["deptHead"];
        $telno = $_POST["deptTelNo"];

        $sql = "INSERT INTO departments
                VALUES ('$code', '$name', '$head', '$telno')";

        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: departments.php");
        exit();
    }
?>