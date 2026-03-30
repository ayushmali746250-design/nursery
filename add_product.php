<?php
include 'db.php';

$name = $_POST['name'];
$price = $_POST['price'];

$conn->query("INSERT INTO products (name,price) VALUES ('$name',$price)");

header("Location: products.php");
?>
