<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php
    /* Step1: Use a pre-built math function here and echo it.
	Step 2:  Use a pre-built string function here and echo it.
	Step 3:  Use a pre-built Array function here and echo it. */
    echo "The square root of 25 is: " . sqrt(25) . "<br/>";

    $text = "hello world";
    echo "Uppercase: " . strtoupper($text) . "<br>";

    $numbers = [10, 20, 30, 40];
    echo "Sum of array: " . array_sum($numbers);
    ?>


  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>