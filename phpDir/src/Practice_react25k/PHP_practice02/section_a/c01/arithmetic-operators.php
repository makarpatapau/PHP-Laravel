<?php

/* Write a PHP code to calculate the cost of an order. Let us say there are three candy items, and the cost of per pack is $5. Calculate the subtotal with tax of 20% and total amount. */
$cost = 5;
$items = 3;
$subtotal = $cost * $items;

$tax = ($subtotal / 100) * 20;
$total = $subtotal + $tax;
?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <h2>The total price of <?= $items ?> items, where each costs <?= $cost ?> with the tax of 20 % is <?= $total ?>.</h2>
</body>

</html>