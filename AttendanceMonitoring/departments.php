<?php
    require_once("database.php");

    if(isset($_POST["delete"])) {
        $depCode = $_POST["depCode"];
        $sql = "DELETE FROM departments WHERE depCode = $depCode";
        mysqli_query($conn, $sql);
        header("Location: departments.php");
        mysqli_close($conn);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments Managment</title>
</head>
<body>
    <h1>Departments Management</h1>
    <a href="addDepartments.php">Add a Department Here</a>
    <a href="index.php">Back to Menu</a>
        <?php
            echo "<table style='border: solid 1px black'>";
            echo "<tr>";
            echo "<th>Code</th>";
            echo "<th>Name</th>";
            echo "<th>Head</th>";
            echo "<th>Tel. No.</th>";
            echo "<th>Actions</th>";
            echo "</tr>";

            $sql = "SELECT * FROM departments";
            $result = mysqli_query($conn, $sql);
            $departments = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $page = "editDepartments.php";
            foreach($departments as $department) {
                echo "<tr>";
                    echo "<td style='border: solid 1px black'>{$department["depCode"]}</td>";
                    echo "<td style='border: solid 1px black'>{$department["depName"]}</td>";
                    echo "<td style='border: solid 1px black'>{$department["depHead"]}</td>";
                    echo "<td style='border: solid 1px black'>{$department["depTelNo"]}</td>";
                    echo "<td style='border: solid 1px black'>
                            <form action='editDepartments.php' method='get'>
                                <input type='hidden' name='depCode' value={$department["depCode"]}>
                                <input type='submit' name='edit' value='edit'>
                            </form>
                            <form action='departments.php' method='post'>
                                <input type='hidden' name='depCode' value={$department["depCode"]}>
                                <input type='submit' name='delete' value='delete'>
                            </form>
                        </td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
</body>
</html>