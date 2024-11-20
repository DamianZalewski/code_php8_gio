<?php

$firstName = "WIll";
$lastName = "Smith";

$name = "$firstName Smith";
$name = $firstName . ' ' . $lastName;
$name = "${firstName} Smith";

echo $name . '<br>';
echo $name[-2];
echo '<br>';
$name[-2] = 'O';
$name[2] = 'O';
echo '<br>';
echo $name;

// heredoc
$x = 1;
$y = 2;
$text = <<<TEXT
LINE 1 $x
LINE 2 $y
LINE 3
TEXT;

echo '<br>';
echo $text;
echo '<br>';
echo nl2br($text);

// Nowdoc

$text = <<<'TEXT'
  line  $x
TEXT;

echo '<br>';
echo $text;

h