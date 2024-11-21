<?php

// null

$x = null;
$x = NULL;

echo $x;
var_dump($x);
var_dump(is_null($x));

var_dump($x == null);

var_dump(is_null($y));

$e = 123;

unset($e);
var_dump($e);

$n = null;
var_dump((string) $n);