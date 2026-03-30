<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>GreenNest Nursery</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <h2 class="logo">🌿 GreenLeaf</h2>

    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="shop.php">Shop</a>
        <a href="categories.php">Categories</a>
        <a href="about.php">About</a>
    </div>

    <div class="nav-right">
        <?php if(isset($_SESSION['user'])){ ?>
            <span>Hi, <?php echo $_SESSION['user']; ?> 👋</span>
            <a href="logout.php">Logout</a>
        <?php } else { ?>
            <a href="user_login.php">👤</a>
        <?php } ?>

        <?php if(isset($_SESSION['admin'])){ ?>
            <a href="dashboard.php">👨‍💼 Admin</a>
            <a href="logout_admin.php">Logout</a>
        <?php } else { ?>
            <a href="admin_login.php">Admin</a>
        <?php } ?>

        <a href="cart.php">🛒</a>
    </div>
</div>

<!-- Hero Section -->
<div class="hero">
    <h1>Welcome to GreenNest</h1>
    <p>Bring Nature to Your Home 🌱</p>
    <a href="shop.php" class="btn">Shop Now</a>
</div>

</body>
</html>
