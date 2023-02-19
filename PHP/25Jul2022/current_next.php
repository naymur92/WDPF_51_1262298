<?php
    $fame = array(
        "Bogura" => "Cart",
        "Cumilla" => "Malai",
        "Sylhet" => "Tea",
        "Dhaka" => "Bakorkhani",
        "Rajshahi" => "Mango"
    );

    // echo current($fame)."\n";
    // next($fame);
    // echo current($fame)."\n";

    while($value = current($fame)){
        echo $value . "\n";
        next($fame);
    }
?>