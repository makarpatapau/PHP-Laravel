<?php
/* Create a simple for loop to find the prices of multiple candy packs. Let us assume one pack of candy costs $1.99. How much did ten packs cost? Display each pack's costs on the web page. */

$price_per_pack = 1.99;
$total_cost = 0;

?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php

    for ($i = 1; $i <= 10; $i++) {
      $cost = $i * $price_per_pack;
      echo "Pack $i: $$cost<br>";
      $total_cost = $cost;
    }
    echo "The total cost of 10 packages is $ $total_cost "
    ?>
  </p>
</body>

</html>