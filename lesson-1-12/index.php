<?php

// operators

$x = 5;
$y = 3;

var_dump(fdiv($x, 0));
var_dump(fmod($x, $y));

$x *= 3;

var_dump($x);

var_dump('5' == 5);
var_dump('5' === 5);
var_dump('5' <> 5);

var_dump(0 == "ada");


$res = $x < 0 ? 'yes' : 'nope';

var_dump($res);

$null = null;

$res = $null ?? 'null';
var_dump($res);

