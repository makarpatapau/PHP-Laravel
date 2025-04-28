<?php

/* 
  Write a PHP code to  create and store array for $best_sellers where it holds list of best-selling items  but display only three best-selling items on the page. The list of best-sellers could be e.g. Chocolate, Mints, Fudge, Bubble gum, Toffee, Jelly Beans etc
   */
$bestSellers = ["Chocolate", "Cotton Candy", "Jelly", "Marsmellow"];
?>
<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers are:
    <p><?php echo $bestSellers[0];
        echo "<br>";
        echo $bestSellers[1];
        echo "<br>";
        echo $bestSellers[3] ?> </p>
  </h2>

</body>

</html>