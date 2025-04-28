<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php

		/*  Step1: Define a function and make it return a calculation of 2 numbers
	Step 2: Make a function that passes parameters and call it using parameter values */

		function sum()
		{
			$number1 = 2;
			$number2 = 4;
			return $number1 + $number2;
		}
		$result = sum();

		echo "The sum of two numbers is $result"
		?>

		<?php
		function step2($a, $b)
		{
			return $a * $b;
		}

		$result = step2(5, 6);
		echo "The result for the second function is $result";
		?>





	</article><!--MAIN CONTENT-->


	<?php include "includes/footer.php"; ?>