<?php
    include("db.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form action="register.php" method="get">
        <h1>Register</h1>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" name="register" value="Register">
    </form>
</body>

</html>
<?php
if (isset($_GET["register"])) {
    if (isset($_GET["username"]) && isset($_GET["password"])) {
        $username = $_GET["username"];
        $password = $_GET["password"];

        $sql = "INSERT INTO account
                VALUES ('$username', '$password')";
        mysqli_query($conn, $sql);
        echo "Registration successful! Welcome, " . htmlspecialchars($username) . ".";
        header('Location: index.php');
        exit();
    } else {
        echo "Missing credentials!";
    }
}
?>