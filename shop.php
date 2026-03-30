<?php 
session_start();
$category = isset($_GET['category']) ? $_GET['category'] : '';
?>
<!DOCTYPE html>
<html>
<head>
<title>Shop</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Plants</h2>

<div class="plant-container">

<?php
// Indoor Plants
if($category == 'indoor' || $category == ''){
?>

<div class="card">
<img src="https://theaffordableorganicstore.com/cdn/shop/files/3cde1db0-e2f1-4f80-a38f-4afa1dd013a1_20260302_234057_0000.webp?v=1772700970">
<h3>Snake Plant</h3>
<p>₹200</p>
<form method="post" action="cart.php">
<input type="hidden" name="plant" value="Snake Plant">
<input type="submit" value="Add to Cart">
</form>
</div>

<div class="card">
<img src="https://naturetouch.co.in/wp-content/uploads/2021/10/DSC_0480-scaled.jpg">
<h3>Money Plant</h3>
<p>₹150</p>
<form method="post" action="cart.php">
<input type="hidden" name="plant" value="Money Plant">
<input type="submit" value="Add to Cart">
</form>
</div>

<div class="card">
<img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSw8EQxDYCqZ-mVO7PDtc8q47u1GRiTNqTaaSdohUMpUS9_ACu-_ReXGe_ES386RDGmuTChjRBp">
<h3>Aloe Vera</h3>
<p>₹120</p>
<form method="post" action="cart.php">
<input type="hidden" name="plant" value="Aloe Vera">
<input type="submit" value="Add to Cart">
</form>
</div>

<div class="card">
<img src="https://nurserylive.com/cdn/shop/files/areca.jpg?v=1751753779">
<h3>Areca Palm</h3>
<p>₹300</p>
<form method="post" action="cart.php">
<input type="hidden" name="plant" value="Areca Palm">
<input type="submit" value="Add to Cart">
</form>
</div>

<?php } ?>

<?php
// Outdoor Plants
if($category == 'outdoor' || $category == ''){
?>

<div class="card">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkbq86FrYVWpR5zeYkBqi6rfh9j-s409lJetkL5VlshORZPxw9yuGwrvRiQN_3pN9wR-31Rg&s=10">
<h3>Rose</h3>
<p>₹100</p>
<form method="post" action="cart.php">
<input type="hidden" name="plant" value="Rose">
<input type="submit" value="Add to Cart">
</form>
</div>

<div class="card">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/Sunflower_sky_backdrop.jpg/250px-Sunflower_sky_backdrop.jpg">
<h3>Sunflower</h3>
<p>₹90</p>
<form method="post" action="cart.php">
<input type="hidden" name="plant" value="Sunflower">
<input type="submit" value="Add to Cart">
</form>
</div>

<div class="card">
<img src="https://nurserylive.com/cdn/shop/products/nurserylive-g-hibiscus-gudhal-flower-red-plant-213118_600x600.jpg?v=1751707084">
<h3>Hibiscus</h3>
<p>₹180</p>
<form method="post" action="cart.php">
<input type="hidden" name="plant" value="Hibiscus">
<input type="submit" value="Add to Cart">
</form>
</div>

<div class="card">
<img src="https://www.gardeningexpress.co.uk/media/catalog/product/cache/66b89186767b2c977358b85d0c9864e8/b/o/bourgainvillea-tree-hires_2.jpg">
<h3>Bougainvillea</h3>
<p>₹220</p>
<form method="post" action="cart.php">
<input type="hidden" name="plant" value="Bougainvillea">
<input type="submit" value="Add to Cart">
</form>
</div>

<?php } ?>

</div>

</body>
</html>