<?php
/* Create a simple while loop to find prices for multiple packs of candy. For example, if one pack costs $1.99 how much would 5 pack costs? Display the prices for all 5 packs of candy. */
$price = 1.99;
$amount = 5;
$totalPrice = 0;
$counter = 1;

?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php while ($counter <= $amount) {
      $totalPrice = $counter * $price;
      $counter++;
    }
    echo "The total price for $amount packs of candy is $totalPrice!";
    ?>
  </p>
</body>

</html>