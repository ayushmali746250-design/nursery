<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="admin-container">

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>🌿 Admin Panel</h2>
        <a href="dashboard.php">🏠 Dashboard</a>
        <a href="products.php">📦 Products</a>
        <a href="orders.php">📋 Orders</a>
        <a href="logout_admin.php">🚪 Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main">
        <h2>Dashboard Overview</h2>
        <p>Welcome, Admin 👨‍💼</p>

        <div class="stats">
            <div class="box">
                <h3>📦 Total Orders</h3>
                <p>
                <?php
                include 'db.php';
                $res = $conn->query("SELECT COUNT(*) as total FROM orders");
                $row = $res->fetch_assoc();
                echo $row['total'];
                ?>
                </p>
            </div>

            <div class="box">
                <h3>👤 Users</h3>
                <p>
                <?php
                $res = $conn->query("SELECT COUNT(*) as total FROM users");
                $row = $res->fetch_assoc();
                echo $row['total'];
                ?>
                </p>
            </div>
        </div>

        <!-- Quick Buttons -->
        <div class="quick">
            <a href="products.php" class="btn">Manage Products</a>
            <a href="orders.php" class="btn">View Orders</a>
        </div>

    </div>

</div>

</body>
</html>