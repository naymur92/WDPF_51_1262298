<?php
    $count = 1;
    
    echo "<pre>\n";

    while($count<=10){
        // echo $count . "\n";

        printf("%d squared = %d \n", $count, pow($count,2));
        $count++;
    }
?>