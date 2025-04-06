<?php

// match expression (PHP 8)

$status = 5;

$display = match($status){
    1 => 'Paid',
    2 => 'Not Paid',
    3,4,5 => 'Unknown',
    default => 'Error'
};

echo $display;

