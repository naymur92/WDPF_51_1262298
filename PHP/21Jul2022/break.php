<?php
    echo "<pre>\n";
    $primes = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47);

    for($count = 1; $count < 1000; $count++){
        $randomNumber = rand(1,50);
        if(in_array($randomNumber,$primes)){
            printf("Prime number found! %d \n", $randomNumber);
            break;
        }
        else{
            printf("Non-prime number found: %d \n",$randomNumber);
        }
    }
?>