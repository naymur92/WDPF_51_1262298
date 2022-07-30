<?php
    echo "<pre>";
    $states = array("Alabama", "Alaska", "Arizona", "Arkanasa", "Dhaka", "Noakhali");
    $subset = array_splice($states, 3, -2, array("Gazipur"));


    print_r($states);
    print_r($subset);

?>