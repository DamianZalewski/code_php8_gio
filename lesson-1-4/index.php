<?php
// declare(strict_types=1);

$flag = true;
$score = 55;
$price = 0.99;
$text = 'Text';

echo $flag . '<br>';
echo $score . '<br>';
echo $price . '<br>';
echo $text . '<br>';

echo gettype($flag) . '<br>';
var_dump($text);

// -------


$arr = [1,2,'43',23,23.4];
echo '<br>';
print_r($arr);

function sum(int $x, int $y){
    return $x + $y;
}

echo '<br>';
echo sum(2, -4);
echo sum(2, "-4");

$int = (int) "5.5";
echo '<br>';
echo $int;