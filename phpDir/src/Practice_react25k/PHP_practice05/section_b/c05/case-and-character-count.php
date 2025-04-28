<!-- Write PHP Code to convert case in lowercase, uppercase, count number of characters and word count -->
<?php
$text = 'Home sweet home';
?>
<?php include 'includes/header.php'; ?>

<p>
  Original text: <?= $text ?> <br>
  Lowercase: <?= strtolower($text) ?> <br>
  Uppercase: <?= strtoupper($text) ?> <br>
  Count characters: <?= strlen($text) ?> <br>
  Count words: <?= str_word_count($text) ?>
</p>

<?php include 'includes/footer.php'; ?>