<?php
/* Create a simple switch statement to get 20% off chocolates on Monday and 20% off mints on Tuesday, and in all other cases, it should show “Buy three packs, get one free.” */
$day = date(1);
?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <?php
  switch ($day) {
    case "Monday":
      echo "20% off chocolates!";
      break;
    case "Tuesday":
      echo "20% off mints!";
      break;
    default:
      echo "Buy three packs, get one free.";
  }
  ?>
</body>

</html>