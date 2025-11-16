<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>  
        <input type="submit" name="Register" value="Register">
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST["username"];
        $password = $_POST["password"];

        if (isset($_POST["Register"])) {
            $sql = "INSERT INTO users VALUES ('$username', '$password');";

            try{
                mysqli_query($conn, $sql);
                echo"Registered!";
            }
            catch(mysqli_sql_exception) {
                echo"Error register";
            }
        }
        elseif (isset($_POST["login"])) {
            $sql = "SELECT password FROM users WHERE username = 'bryl'";

            try{
                $database_pass = mysqli_query($conn, $sql);
                $user_pass = mysqli_fetch_assoc($database_pass);
                echo $user_pass["password"];
                
                if($user_pass == $password){
                    echo"logged int!";
                }
                else {
                    echo"wrong!";
                }

            }
            catch(mysqli_sql_exception) {
                echo"Error login";
            }
        }
    }
    mysqli_Close($conn);
?>