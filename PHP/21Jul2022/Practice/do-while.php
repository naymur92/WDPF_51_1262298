<?php
    echo "<pre> \n";

    $count = 1;
    do{
        $output = sprintf("%d squared %d \n", $count, pow($count,2));
        echo $output;

        $count++;
    }
    while($count<=10)
?>