<?php
    $countries = array(
        "Bangladesh" => "Dhaka",
        "India" => "Dilli",
        "Pakistan" => "Islamabad",
        "Srilanka" => "Colombo"
    );

    $randomed = array_rand($countries, 2);

    print_r($randomed);
?>