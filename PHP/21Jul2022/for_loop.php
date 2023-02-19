<?php
    //for loop
    echo "<pre>\n";

    // for($i=0; $i<=10; $i++){
    //     echo "{$i} is my number.\n";
    // }

    // for($i=0; $i<=10;){
    //     echo "{$i} is my number.\n";
    //     $i++;
    // }

    // $i=0;
    // for(; $i<=10;){
    //     echo "{$i} is my number.\n";
    //     $i++;
    // }

    $i=0;
    for(;;){
        if($i>10){
            break;
        }
        echo "{$i} is my number.\n";
        $i++;
    }

    echo "\n";
?>