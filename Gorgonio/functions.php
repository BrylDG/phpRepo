<?php
    include("db.php");

    function showDepartments($conn) {
        $sql = "SELECT * FROM departments";
        $datas = mysqli_query($conn, $sql);
        foreach($datas as $data){
            echo $data['depCode'];
            echo $data['depName'];
            echo $data['depHead'];
            echo $data['depTelNo'];
            echo "<a href='editDepartment.php?depCode={$data['depCode']}'>Edit</a>";
        }
    }

    function showEmployees($conn) {
        $sql = "SELECT * FROM employees";
        $datas = mysqli_query($conn, $sql);
        foreach($datas as $data){
            echo $data['empID'];
            echo $data['depCode'];
            echo $data['empFName'];
            echo $data['empLName'];
            echo $data['empRPH'];
            echo "<a href='editDepartment.php?depCode={$data['depCode']}'>Edit</a>";
        }
    }

    function addDepartment($depCode, $depName, $depHead, $depTelNo, $conn) {
        $sql = "INSERT INTO departments VALUES ('$depCode', '$depName', '$depHead', '$depTelNo')";

        try {
            mysqli_query($conn, $sql);
            echo "Sucessfully Added";
            header('Location: deptManagement.php');
        }
        catch (mysqli_sql_exception) {
            echo "Error!";
        }
    }

    function getDepDetails($conn, $depCode) {
        $sql = "SELECT * FROM departments WHERE depCode = '$depCode'";
        $details = mysqli_fetch_assoc(mysqli_query($conn, $sql));
        return $details;
    }

    function updateDepartment($originalDepCode, $depCode, $depName, $depHead, $depTelNo, $conn) {
        $sql = "UPDATE departments
                SET depCode = '$depCode', depName = '$depName', depHead = '$depHead', depTelNo = '$depTelNo'
                WHERE depCode = '$originalDepCode'";

        try {
            mysqli_query($conn, $sql);
            echo "Sucessfully Updated";
            header('Location: deptManagement.php');
        }
        catch (mysqli_sql_exception) {
            echo "Error!";
        }
    }

    function add($conn, $table, $var1, $var2, $var3, $var4, $var5) {
        $sql = "INSERT INTO $table VALUES ('$var1', '$var2', '$var3', '$var4', '$var5')";

        try {
            mysqli_query($conn, $sql);
            echo "Sucessfully Added";

            if($table == "departments") {
                header('Location: deptManagement.php'); 
            }
            else {
                header('Location: empManagement.php');
            }         
        }
        catch (mysqli_sql_exception) {
            echo "Error!";
        }
    }
?>