<?php

/* Write a PHP code to  create and store array in $nutrition, the value that is stored for the fat content should be updated and add a new element e.g. fiber and write those values out to the page.
   */
$nutrition = ["fat" => 0.5, "sugar" => 1, "salt" => 2];
$nutrition["fat"] = 2;
$nutrition["fiber"] = 1;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g) is:</h2>
  <h3><?php var_dump($nutrition) ?></h3>
  <!-- <?php echo $nutrition["fat"];
        echo $nutrition["sugar"];
        echo $nutrition["salt"];
        echo $nutrition["fiber"]; ?> -->
</body>

</html>