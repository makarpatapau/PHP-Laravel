<?php

/* Write a PHP code to compare and check if the quantity wanted is less than or equal to quantity in stock. If the user can buy based on comparison and if value is true, page should show 1 and if false, the page should show nothing.
   */
$quantityInStock = 10;
$quantityWanter = 5;

// instead of writing in the HTML we can put it here     $canBuy = $quantityWanter <= $quantityInStock; and then in html $canBuy ? "in Stock" : "out of Stock"
?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <?= $quantityInStock < $quantityWanter ? "Out of Stock" : "In Stock" ?>

</body>

</html>