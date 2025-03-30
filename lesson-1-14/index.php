<?php

// operators precedence

$x = 5 + 3 * 5;
var_dump($x);

$x = true;
$y = false;
$z = true;

var_dump($y || $x && $z);

$z = $x and $y;
$z = $x && $y;
