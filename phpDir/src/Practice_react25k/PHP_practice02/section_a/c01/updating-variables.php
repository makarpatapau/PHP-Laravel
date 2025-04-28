<?php

/* Write a PHP code to update a value in a variable so that the cost of candy per pack is shown and the initial name variable is changed to something else. For example, if initial name is “Guest”, you can update it to “Your Name” */
$candyName = "Cotton candy";
$candyName = "Bubble Gum";
$price = 10;


?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2> We have <?php echo $candyName ?> available and the price is <?php echo $price ?> €.
  </h2>
</body>

</html>