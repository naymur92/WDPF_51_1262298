<?php
    echo "<pre> \n";
    $primes = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47);

    for($count = 1; $count < 1000; $count++){
        $randNumber = rand(1,50);
        if(in_array($randNumber, $primes)){
            print "Prime number found! {$randNumber} \n";
            break;
        }
        else{
            // print "Non-prime number found: {$randNumber} \n";
            // printf("Non-prime number found: %d \n", $randNumber);
            echo "Non-prime number found: {$randNumber} \n";
        }
    }
?>