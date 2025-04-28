<?php
/* Write a PHP Code to include header.php and footer.php and check the candy stock. Let us assume you have 25 stock of candy, so check if you have “Good availability”, you have “low stock”, or you are running “Out of stock. */
include 'header.php';
$stock = 5;

if ($stock > 20) {
    $message = "Good availability";
} elseif ($stock > 0) {
    $message = "Low stock";
} else {
    $message = "Out of stock";
}
?>


<h2>Chocolate</h2>
<?php
echo $message;
include "footer.php"
?>