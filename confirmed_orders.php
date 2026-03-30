<?php
session_start();
include 'db.php';

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

// SIMPLE LOGIC:
// 1. Get order from orders table
// 2. Insert into confirmed_orders
// 3. Delete from orders

if(isset($_GET['confirm'])){
    $id = $_GET['confirm'];

    // Step 1: get order
    $result = $conn->query("SELECT * FROM orders WHERE id=$id");

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        $name = $row['name'];
        $amount = $row['amount'];

        // Step 2: insert into confirmed_orders
        $conn->query("INSERT INTO confirmed_orders (name,amount,status) VALUES ('$name',$amount,'Confirmed')");

        // Step 3: delete from orders
        $conn->query("DELETE FROM orders WHERE id=$id");
    }

    header("Location: confirmed_orders.php");
    exit();
}

// show confirmed orders
$result = $conn->query("SELECT * FROM confirmed_orders");
?>
<!DOCTYPE html>
<html>
<head>
<title>Confirmed Orders</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Confirmed Orders ✅</h2>

<table border="1" cellpadding="10">
<tr>
<th>ID</th>
<th>Name</th>
<th>Amount</th>
<th>Status</th>
</tr>

<?php while($row = $result->fetch_assoc()){ ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td>₹<?php echo $row['amount']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>
<?php } ?>

</table>

<a href="orders.php">Back to Orders</a>
</body>
</html>
