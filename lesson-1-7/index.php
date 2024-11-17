<?php

$x = 13.5e3;
$x = 13.5e-3;

var_dump($x);

echo '<br>';


echo PHP_FLOAT_MAX;

echo '<br>';

// $y = floor((0.1+0.7)*10);
$y = ceil((0.1+0.7)*10);
echo $y;

$x = 0.23;
$y = 1 - 0.77;
echo '<br>';

var_dump($x,$y);
echo '<br>';

echo NAN;
echo '<br>';

echo INF;
echo '<br>';

$x = PHP_FLOAT_MAX * 2;
VAR_DUMP(is_infinite($x));
echo '<br>';
VAR_DUMP(is_nan($x));


echo '<br>';
$x = "5";
var_dump((float) $x);