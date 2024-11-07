<?php

// $isComplete = TRUE;
// $isComplete = true;
$isComplete = 0;

if($isComplete){
    // do smth
    echo 'yes';
}else{
    // do smth else
    echo 'no';
}
echo '<br>';
var_dump(is_bool($isComplete));