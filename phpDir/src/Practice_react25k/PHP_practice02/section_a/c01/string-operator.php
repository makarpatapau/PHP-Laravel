<?php

/* 
Write a PHP code to contcatenate greeting e.g. “Thank you” to customer who bought his candy order. Customer name can be anything for example “Mr. James”. The page should show:Mr. James’s OrderThank you, Mr. James
   */

$customer = "Mr. Makar";
$greeting = "Thank you, " . $customer;
?>
<!DOCTYPE html>
<html>

<head>
  <title>String Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2> <?= $customer ?>'s Order</h2>
  <h2><?= $greeting ?></h2>
</body>

</html>