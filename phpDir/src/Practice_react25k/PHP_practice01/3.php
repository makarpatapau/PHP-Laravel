<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php

		/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
	Step 2: Make a forloop  that displays 10 numbers
	Step 3 : Make a switch Statement that test againts one condition with 5 cases
 */
		$lang = "PHP";

		if ($lang == "Python") {
			echo "I love $lang";
		} elseif ($lang == "React") {
			echo "I love $lang";
		} else {
			echo "I love $lang";
		}

		for ($number = 1; $number <= 10; $number++) {
			echo "$number <br/>";
		}

		$day = "Monday";
		switch ($day) {
			case "Monday":
				echo "We have React at 11:45";
				break;
			case "Tuesday":
				echo "We have React Class at 9:30";
				break;
			case "Wednesday":
				echo "We have Database Class at 9:30";
				break;
			case "Thursday":
				echo "We have PHP Class at 9:30";
				break;
			default:
				echo "Today is weekend!!";
		}
		?>






	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>