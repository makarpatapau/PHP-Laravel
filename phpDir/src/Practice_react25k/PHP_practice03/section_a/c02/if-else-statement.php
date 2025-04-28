<?php
/* Create a simple if else statement to check if candy is in stock or not. If candy is not in stock, then print the message “Sold Out”; if it is available in stock, print the message “In Stock.” */
$stock = 5;

if ($stock <= 0) {
  $message = "Sold out";
} else {
  $message = "In stock";
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?= $message ?>
</body>

</html>