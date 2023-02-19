<?php
    $districts = array("Chuadanga"=>"Mathabhanga", "Kushtia"=>"Gorai", "Dhaka"=>"Buriganga");

    $numbers = range(60,100);
    echo "Array_search() function search for a value and return its index. \n";
    echo array_search("Gorai", $districts)."\n";

    echo array_search(71, $numbers)."\n";
?>