<?php
/* Refactor using the ternary operator: Create a simple if else statement to check whether candy is in stock. If candy is not in stock, then print the message “Sold Out”; if it is available in stock, print the message “In Stock.” <?=  ?>
This is the shorter version.*/
$stock = 0;
$result = ($stock <= 0) ? "Sold out" : "In stock";
?>
<!DOCTYPE html>
<html>

<head>
  <title>Ternary Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?= $result ?>
</body>

</html>