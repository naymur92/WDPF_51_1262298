<?php
    $count = 10;
    echo "<pre>\n";

    do{
        printf("%d cubed = %d\n", $count, pow($count,3));
        $count --;
    }
    while($count>0)
?>