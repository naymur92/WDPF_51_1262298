<?php
    $x = 15;
    $output = function(){
        global $x;
        $x += 100;
        echo $x . "\n";
    };
    $output();
    echo $x ."\n";
?>