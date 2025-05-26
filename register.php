<?php
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
        $_SESSION["username"] = $_GET["username"];
        $_SESSION["password"] = $_GET["password"];
        echo "Registration successful! Welcome, " . htmlspecialchars($_SESSION["username"]) . ".";
        header('Location: index.php');
        exit();
    } else {
        echo "Missing credentials!";
    }
}
?>