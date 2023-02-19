<?php
    $fame = array(
        "Bogura" => "Cart",
        "Cumilla" => "Malai",
        "Sylhet" => "Tea",
        "Dhaka" => "Bakorkhani",
        "Rajshahi" => "Mango"
    );

    // echo key($fame)."\n";
    // next($fame);
    // echo key($fame)."\n";

    while($key = key($fame)){
        echo $key . "\n";
        next($fame);
    }
?>