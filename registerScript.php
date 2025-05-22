<?php
$registeredUsername = $_GET['username'] ?? '';
$registeredPassword = $_GET['password'] ?? '';

header("Location: index.php?username=$registeredUsername&password=$registeredPassword");
exit();
