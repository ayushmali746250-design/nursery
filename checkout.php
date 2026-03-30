<?php 
session_start();

// check if user logged in
if(!isset($_SESSION['user'])){
    echo "<h3>Please login first to place order.</h3>";
    echo '<a href="user_login.php">Go to Login</a>';
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Checkout</h2>
<form action="user_order.php" method="post">
<input type="text" name="name" placeholder="Enter Name" required>
<input type="submit" value="Place Order">
</form>
</body>
</html>
