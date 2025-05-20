<?php
$customerId = $_POST['customerId'];
$customerName = $_POST['customerName'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];

$productNames = [
  'headphones' => 'Wireless Headphones',
  'watch' => 'Smart Watch',
  'speaker' => 'Bluetooth Speaker'
];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Order Result</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="container mt-5">
  <h1 class="mb-4">Order Confirmation</h1>
  <p><strong>Customer ID:</strong> <?= htmlspecialchars($customerId) ?></p>
  <p><strong>Customer Name:</strong> <?= htmlspecialchars($customerName) ?></p>
  <p><strong>Product Ordered:</strong> <?= $productNames[$product] ?? 'Unknown' ?></p>
  <p><strong>Quantity:</strong> <?= htmlspecialchars($quantity) ?></p>
  <a href="orderpage.php" class="btn btn-secondary mt-3">Back to Shop</a>
</body>
</html>
