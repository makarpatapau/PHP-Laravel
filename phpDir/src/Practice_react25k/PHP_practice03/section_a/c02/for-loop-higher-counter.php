<?php
/* Create a simple for loop to find prices of multiple higher packs of candy. Let us assume the customer wants 10 packs to 100 packs of candies. How much do 10 to 100 packs cost? Display from 10 packs to 100 packs cost on the web page */
$price_per_pack = 5;
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop - Higher Counter</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Large Orders</h2>
  <p>
    <?php
    for ($packs = 10; $packs <= 100; $packs += 10) {
      $total_price = $packs * $price_per_pack;
      echo "$packs packs cost $$total_price <br>";
    }
    ?>
  </p>
</body>

</html>