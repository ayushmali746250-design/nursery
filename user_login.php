<?php
session_start();
include 'db.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");

    if($result->num_rows > 0){
        $_SESSION['user'] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "<p style='color:red;'>Invalid login</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-box">
<h2>User Login 🌿</h2>

<form method="post">
<input type="text" name="username" placeholder="Enter username" required>
<input type="password" name="password" placeholder="Enter password" required>
<input type="submit" value="Login">
</form>

<p>Don't have an account? <a href="register.php">Register here</a></p>
<a href="admin_login.php">Login as Admin</a><br>
<a href="index.php">← Back to Store</a>

</div>

</body>
</html>
