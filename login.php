<?php
include 'registerScript.php';

$username = $_GET['username'] ?? '';
$password = $_GET['password'] ?? '';
$validUsername = $registeredUsername;
$validPassword = $registeredPassword;
$errorMessage = 'Invalid credentials. Please try again.';
$successMessage = 'Login successful! Welcome, ' . htmlspecialchars($username) . '.';

if ($username == $validUsername && $password == $validPassword) {
    echo "<h1>Welcome $username!</h1>";
    echo $successMessage;
} else {
    echo $errorMessage;
}
