<?php
session_start();
include 'db.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn->query("INSERT INTO users (username,password) VALUES ('$username','$password')");

    $_SESSION['user'] = $username;
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-box">
<h2>Register 🌿</h2>

<form method="post">
<input type="text" name="username" placeholder="Enter your name" required>
<input type="password" name="password" placeholder="Enter password" required>
<input type="submit" value="Register">
</form>

<a href="user_login.php">Already have account? Login</a>

</div>

</body>
</html>
