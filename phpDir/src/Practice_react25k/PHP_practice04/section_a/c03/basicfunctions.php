<?php
/* Create three functions to generate the values as shown in this table. Price for Toffee is 3, Mints is 2 and Fudge is 8. -The first function should look at stock levels and create a message indicating whether or not more stock should be ordered. If the stock is less than 10 no Re-Order necessary. -The second function should find the total value of stock for each item that is sold. -And finally the third function should calculate how much tax will be due when all of the remaining stock has been sold. */

$candy = [
  'Toffee' => ["price" => 3, "stock" => 12],
  "Mints" => ["price" => 2, "stock" => 6],
  "Fudge" => ["price" => 8, "stock" => 35]
];

$tax = 20;

function get_reoder_message(int $stock): string // int ensures that $stock argument is always an integer, and string that it should return only a string 
{
  return ($stock < 10) ? "yes" : "no";
}

function get_total_value(float $price, int $quantity): float
{
  return $price * $quantity;
}

function tax_calculation(float $price, int $quantity, int $tax = 0): float
{
  return ($price * $quantity) * ($tax / 100);
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Basic Functions</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Stock Control</h2>
  <table>
    <tr>
      <th>Product</th>
      <th>Stock</th>
      <th>Re-order</th>
      <th>Total value</th>
      <th>Tax due</th>
    </tr>
    <?php foreach ($candy as $product => $data) { ?>
      <tr>
        <td><?= $product ?> </td>
        <td><?= $data['stock'] ?> </td>
        <td><?= get_reoder_message($data['stock']) ?> </td>
        <td><?= get_total_value($data['price'], $data['stock']) ?> </td>
        <td><?= tax_calculation($data['price'], $data['stock'], $tax) ?> </td>
      </tr>

    <?php } ?>
  </table>
</body>

</html>