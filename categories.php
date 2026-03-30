<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Categories</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2 style="text-align:center; margin-top:20px;">🌿 Plant Categories</h2>

<div class="cat-container">

    <!-- Indoor -->
    <div class="cat-card">
        <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQ4f9ZLJ5w_rxsod-UeHjcB8b8RAaqdRUIRyRFjpLJ0QDOpdveLJO6YFtnM9dLCcJJhKgUc5UZQxL_opNBJm8gk2lBmy3nZcZUoKLobQyU">
        <h3>Indoor Plants</h3>
        <p>Perfect for home & office decoration 🌱</p>
        <a href="shop.php?category=indoor" class="btn">Shop Indoor</a>
    </div>

    <!-- Outdoor -->
    <div class="cat-card">
        <img src="https://nurserylive.com/cdn/shop/products/nurserylive-combo-packs-plants-popular-outdoor-plants-for-gardening-on-terrace-16969219211404.jpg?v=1634226628">
        <h3>Outdoor Plants</h3>
        <p>Best for gardens & balconies 🌼</p>
        <a href="shop.php?category=outdoor" class="btn">Shop Outdoor</a>
    </div>

</div>

<br>
<div style="text-align:center;">
<a href="index.php" class="btn">⬅ Back to Home</a>
</div>

</body>
</html>
