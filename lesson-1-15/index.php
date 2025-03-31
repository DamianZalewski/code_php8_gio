<?php

// control structures

if(true){
    echo 'First';
}else if(5 < 10){
    echo 'Second';
}else{
    echo 'Third';
}

?>

<?php $score = 95; ?>

<?php if($score > 90): ?>
    AAAA
<?php else: ?>
    BBBB
<?php endif ?>
