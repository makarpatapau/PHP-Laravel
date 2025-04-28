<?php

/* 
Write a PHP code to  create and store array in a  variable called $nutrition with fat, sugar and salt and display the contents of Nutrition (per 100G) in percentage
Write you php code here */

$nutrition = ["fat" => 0.5, "sugar" => 1, "salt" => 2];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g) is <?php echo $nutrition["fat"] + $nutrition["sugar"] + $nutrition["salt"] ?> %</h2>
  <h3>The salt is <?php echo $nutrition["fat"] ?>%</h3>
  <h3>The salt is <?php echo $nutrition["salt"] ?>%</h3>
  <h3>The sugar is <?php echo $nutrition["sugar"] ?>%</h3>

</body>

</html>