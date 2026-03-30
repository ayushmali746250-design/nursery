<?php
session_start();
include 'db.php';

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

// reject only here
if(isset($_GET['reject'])){
    $id = $_GET['reject'];
    $conn->query("UPDATE orders SET status='Rejected' WHERE id=$id");
    header("Location: orders.php");
    exit();
}

$result = $conn->query("SELECT * FROM orders");
?>
<!DOCTYPE html>
<html>
<head>
<title>Orders</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Orders</h2>
<table border="1" cellpadding="10">
<tr><th>ID</th><th>Name</th><th>Amount</th><th>Status</th><th>Action</th></tr>

<?php while($row = $result->fetch_assoc()){ ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td>₹<?php echo $row['amount']; ?></td>
<td><?php echo $row['status']; ?></td>
<td>
<a href="confirmed_orders.php?confirm=<?php echo $row['id']; ?>">Confirm</a> |
<a href="orders.php?reject=<?php echo $row['id']; ?>">Reject</a>
</td>
</tr>
<?php } ?>

</table>
<a href="dashboard.php">Back</a>
</body>
</html>