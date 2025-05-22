<?php
$username = $_GET['username'] ?? '';
$password = $_GET['password'] ?? '';
$validUsername = 'admin';
$validPassword = 'admin';
$errorMessage = 'Invalid credentials. Please try again.';
$successMessage = 'Login successful! Welcome, ' . htmlspecialchars($username) . '.';

echo $username . '<br>';
echo $password . '<br>';
if ($username == $validUsername && $password == $validPassword) {
    echo $successMessage;
} else {
    echo $errorMessage;
}
