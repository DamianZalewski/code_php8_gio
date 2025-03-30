<?php

// operators

$x = @file('foo.txt');

$x = 1;

$x++;
$x--;
--$x;

$null = null;
$null++;
echo $null;

$y = 0;

var_dump($x & $y);

$ax = ['a', 'b', 'c'];
$ab = ['d', 'e', 'f'];

$ac = $ax + $ab;
var_dump($ac);

var_dump($ax == $ab);