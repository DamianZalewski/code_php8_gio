<?php

echo PHP_INT_MAX . '<br>';
echo PHP_INT_MIN . '<br>';

$x = 5;
echo '<br>';
echo $x;

$y = 0x2A;
echo '<br>';
echo $y;

$max = PHP_INT_MAX+1;
echo '<br>';
echo $max;
echo '<br>';
var_dump($max);

$int = (int) true;
echo '<br>';
echo $int;
echo '<br>';
var_dump(is_int($x));

$n = 2_000_000_000;
echo '<br>';
echo $n;