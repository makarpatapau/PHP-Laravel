<!-- Write PHP Code to create -array of greetings (i.e. “Hi”, “Howdy”, “Hello”, “Hola”, “Cia”, “Moi”, “Namaste”, “Welcome”) 
 -then display random greeting
 -find array of best sellers of items (i.e. “notebook”, “pencil”, “ink”) 
 -count items and display top items
 -create an array holding customer details (e.g firstname, lastname, email). 
 -and if you have customer first name add it to greetingPractice -->

<?php
$greetings = ["Hi", "Howdy", "Hello", "Hola", "Cia", "Moi", "Namaste", "Welcome"];
$bestSellers = ["notebook", "pencil", "ink"];

?>
<?php include 'includes/header.php'; ?>

<h1>Best Sellers</h1>
<?php $array = array_rand($greetings);
$random = $greetings[$array];
echo $random;
?>
<!-- <p>The amount of best sellers: </p> -->

<?php include 'includes/footer.php'; ?>