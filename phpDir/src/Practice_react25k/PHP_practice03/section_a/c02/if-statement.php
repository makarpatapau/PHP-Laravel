<?php
/* Create a simple if statement to greet user if the name is not empty.  */
$name = "Makar";

?>
<!DOCTYPE html>
<html>

<head>
  <title>if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<h1>The Candy Store</h1>
<?php
if (!empty($name)) {
  echo "Hello, $name!";
}
?>
</body>

</html>