<?php
    $numbers = array(5,9,12,23,29,35);

    //for loop
    // for($i=0; $i<count($numbers); $i++){
    //     oddEven($numbers[$i]);
    // }
    
    //foreach loop
    foreach($numbers as $number){
        oddEven($number);
    }


    //Create oddEven function
    function oddEven($n){
        if($n%2==0){
            echo "$n is an even number.\n";
        }
        else{
            echo "$n is an odd number.\n";
        }
    }
?>