<?php

echo print('Hello World!');

echo '<br>';

echo 'Hello', ' ', 'world';

echo '<br>';

echo "Joe's Invoice";

echo '<br>';

echo 'Joe\'s Invoice';

$name = 'Gio';

echo '<br>';

echo $name;

$x = 1;
// $y = $x;
$y = &$x;

$x = 3;

echo '<br>';

echo $y;

echo '<br>';

echo "Hello ${name}";


echo '<br>';

echo "Hello " . $name;