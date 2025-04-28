<?php

/* Write a PHP code to store indexed arrays in an array or multidimentional array with variable called $offers. Each element in the array stores associated array holding name, price, and stock level of an item that is on offer. Print out the name and price of all the products.
   */
$offers = [
  ["name" => "apple", "price" => 14, "stock" => 100],
  ["name" => "banana", "price" => 8, "stock" => 150],
  ["name" => "plum", "price" => 20, "stock" => 70]
];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>
  <h3>There are <?php echo ($offers[0]["stock"]);
                echo " ";
                echo ($offers[0]["name"]) ?></h3>

</body>

</html>