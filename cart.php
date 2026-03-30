<?php
session_start();

// Add item to cart
if(isset($_POST['plant'])){
    $_SESSION['cart'][] = $_POST['plant'];
}

// Remove single item
if(isset($_GET['remove'])){
    $index = $_GET['remove'];
    unset($_SESSION['cart'][$index]);
}

// Clear cart
if(isset($_POST['clear'])){
    unset($_SESSION['cart']);
}

// Prices (simple array) (simple array)
$prices = [
    "Snake Plant"=>200,
    "Money Plant"=>150,
    "Aloe Vera"=>120,
    "Areca Palm"=>300,
    "Rose"=>100,
    "Sunflower"=>90,
    "Hibiscus"=>180,
    "Bougainvillea"=>220
];
?>
<!DOCTYPE html>
<html>
<head>
<title>Cart</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Your Cart</h2>

<?php
$total = 0;

if(!empty($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $i=>$item){
        $price = $prices[$item];
        $total += $price;
        echo "<p>$item - ₹$price <a href='cart.php?remove=$i'>❌</a></p>";
    }

    echo "<h3>Total = ₹$total</h3>";
    // show checkout only if user logged in
    if(isset($_SESSION['user'])){
        echo '<a href="checkout.php">Checkout</a>';
    } else {
        echo '<p>Please login to proceed to checkout</p>';
        echo '<a href="user_login.php">Login</a>';
    }
}else{
    echo "<p>Cart is empty</p>";
}
?>

<!-- Clear Cart Button -->
<form method="post" action="cart.php">
<input type="submit" name="clear" value="Clear Cart">
</form>

<br>
<a href="index.php">⬅ Back to Home</a>

</body>
</html>
