<?php
session_start();
include 'db.php';

// check login
if(!isset($_SESSION['user'])){
    echo "<h3>Please login first.</h3>";
    echo '<a href="user_login.php">Login</a>';
    exit();
}

// prevent order if cart empty
if(empty($_SESSION['cart'])){
    echo "<h3>No items in cart. Please add plants first.</h3>";
    echo '<a href="shop.php">Go to Shop</a>';
    exit();
}

// use logged in username only (not manual input)
$name = $_SESSION['user'];

// simple total calculation from cart
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

$total = 0;
foreach($_SESSION['cart'] as $item){
    $total += $prices[$item];
}

$conn->query("INSERT INTO orders (name,amount,status) VALUES ('$name',$total,'Pending')");

// NOTE: cart is NOT cleared automatically now
// user can clear manually from cart page

echo "<h2>Order placed successfully by $name</h2>";
