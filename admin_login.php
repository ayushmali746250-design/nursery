<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == 'admin'){
        $_SESSION['admin'] = 'admin';
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<p style='color:red;'>Invalid admin login</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-box">
<h2>Admin Login 👨‍💼</h2>

<form method="post">
<input type="text" name="username" placeholder="Admin username" required>
<input type="password" name="password" placeholder="Password" required>
<input type="submit" value="Login as Admin">
</form>

<a href="user_login.php">Login as User</a><br>
<a href="index.php">⬅ Back to Home</a>

</div>

</body>
</html>
