<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <form action="index.php" method="$_POST">
        <h1>Login</h1>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
    <a href="register.php">Register Here!</a>
</body>

</html>
<?php
if (isset($_POST["login"])) {
    if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
        if ($_POST["username"] == $_SESSION["username"] && $_POST["password"] == $_SESSION["password"]) {
            header('Location: /homepage.php');
            exit();
        } else {
            echo "Invalid credentials!";
        }
    } else {
        echo "Missing cridentials!";
    }
}
?>