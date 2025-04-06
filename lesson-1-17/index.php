<?php

// switch

$status = 'declined';

switch($status){
    case 'not-paid':
        echo 'Not paid';
        break;
    case 'declined':
    case 'paid':
        echo 'paid or declined';
        break;
    default:
        echo 'default';
}