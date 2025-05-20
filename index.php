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
</body>

</html>
<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$validUsername = 'admin';
$validPassword = 'admin';
$errorMessage = 'Invalid credentials. Please try again.';
$successMessage = 'Login successful! Welcome, ' . htmlspecialchars($username) . '.';

if ($username == $validUsername && $password == $validPassword) {
    echo "{$successMessage}";
} else {
    echo "{$errorMessage}";
}
?>