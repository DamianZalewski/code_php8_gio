<?php

$firstName = 'Gio';

$firstName = 'Joe';

// echo $firstName;

define('STATUS_PAID', 'paid');

echo STATUS_PAID;

echo '<br>';

echo defined('STATUS_PAID');

const STATUS_NOTPAID = 'not paid';

echo '<br>';

echo STATUS_NOTPAID;

if(true){
    // const FOO = 'bar';
    define('STATUS_NEW', 'new');
    echo '<br>';
    echo STATUS_NEW;
}

echo '<br>';

$paid = 'CHECK';

define('STATUS_'. $paid, $paid);

echo STATUS_CHECK;

echo '<br>';

echo PHP_VERSION;

echo '<br>';

echo __LINE__;
echo '<br>';
echo __FILE__;

$foo = 'bar';
$$foo = 'baz';

echo '<br>';
echo $foo, $bar;