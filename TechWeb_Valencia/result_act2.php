<!DOCTYPE html>
<html>
<head>
    <title>Order Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .receipt {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 2px dashed #333;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
        .item {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="receipt">
    <h2>McDonald's Order Receipt</h2>

            <!-- NEW CODE TRANSACTION DATE -->
    <div style="text-align:center; margin-bottom: 20px; font-weight: bold;">
        Transaction Date: <?php echo date("F d, Y H:i"); ?>
    </div>
    
    <?php
    // Get values from POST
    $customerId = $_POST['customerid'] ?? '';
    $customerName = $_POST['customername'] ?? '';
    $meal = $_POST['meals'] ?? '';
    $size = $_POST['sizes'] ?? '';
    $quantity = $_POST['quantity'] ?? 1;
    $extras = $_POST['extras'] ?? [];

    // Define prices
    $menu = [
        "A" => ["Small" => 5, "Medium" => 6, "Large" => 7],
        "B" => ["Small" => 10, "Medium" => 12, "Large" => 15],
        "C" => ["Small" => 15, "Medium" => 18, "Large" => 20],
        "D" => ["Small" => 18, "Medium" => 20, "Large" => 22],
    ];

    // Format size correctly
    $size = ucfirst(strtolower($size)); // "small" → "Small"

    // Calculate price
    $unitPrice = $menu[$meal][$size] ?? 0;
    $total = $unitPrice * intval($quantity);
    ?>

    <div class="item"><span class="label">Customer ID:</span> <?php echo htmlspecialchars($customerId); ?></div>
    <div class="item"><span class="label">Customer Name:</span> <?php echo htmlspecialchars($customerName); ?></div>
    <div class="item"><span class="label">Meal:</span> <?php echo $meal; ?></div>
    <div class="item"><span class="label">Size:</span> <?php echo $size; ?></div>
    <div class="item"><span class="label">Quantity:</span> <?php echo $quantity; ?></div>
    <div class="item"><span class="label">Unit Price:</span> $<?php echo number_format($unitPrice, 2); ?></div>
    <div class="item"><span class="label">Extras:</span>
        <?php
        if (!empty($extras)) {
            echo implode(", ", array_map('htmlspecialchars', $extras));
        } else {
            echo "None";
        }
        ?>
    </div>
    <hr>
    <div class="item"><span class="label">Total:</span> <strong>$<?php echo number_format($total, 2); ?></strong></div>
</div>

</body>
</html>
