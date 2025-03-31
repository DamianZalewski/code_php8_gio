<?php

// break & continue

$i = 0;
while($i <= 10){
    echo $i . '<br>';
    $i++;

    // continue;

    while(true){
        break;
        // break 2;
    }
}

echo '<hr>';

$i = 0;

do{
    echo $i . '<br>';
}while($i > 0);

echo '<hr>';

for(;;){
    echo 'inf' . '<br>';
    break;
}

echo '<hr>';

$count = count([2,5,3,4,2,1]);
// for($i = 0; i < count([2,5,3,4,2,1]); i++){ <-- performance!
for($i = 0; $i < $count; $i++){
    echo $i . '<br>';
}

echo '<hr>';

foreach([1,2,3] as $el){
    echo $el . '<br>';
}

echo $el;

unset($el);

echo $el;