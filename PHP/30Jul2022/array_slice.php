<?php
    echo "<pre>";
    $states = array("Alabama", "Alaska", "Arizona", "Arkanasa", "Dhaka", "Noakhali");
    $subset = array_slice($states, 3);
    $subset1 = array_slice($states, -2); //length - subset = starting index //6-2=4


    print_r($states);
    print_r($subset);
    print_r($subset1);

?>