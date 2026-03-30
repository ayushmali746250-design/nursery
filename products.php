<?php
session_start();
include 'db.php';

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

// delete product from DB
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM products WHERE id=$id");
}

$result = $conn->query("SELECT * FROM products");
?>
<!DOCTYPE html>
<html>
<head>
<title>Products</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Products</h2>

<h3>Add Product</h3>
<form method="post" action="add_product.php">
<input type="text" name="name" placeholder="Name" required>
<input type="number" name="price" placeholder="Price" required>
<input type="submit" value="Add">
</form>

<table border="1" cellpadding="10">
<tr><th>ID</th><th>Name</th><th>Price</th><th>Action</th></tr>

<?php while($row = $result->fetch_assoc()){ ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td>₹<?php echo $row['price']; ?></td>
<td><a href="products.php?delete=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php } ?>

</table>
<a href="dashboard.php">Back</a>
</body>
</html>