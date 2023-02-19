<?php

    $countries = array(
        "Bangladesh" => "Dhaka",
        "India" => "Delhi",
        "Nepal" => "Kathmundu",
        "Pakistan" => "Lahore",
        "Afganistan" => "Kabul"
    );
    echo "<h3>Main Array values are:</h3><pre>";
    print_r($countries);
    echo "</pre>";
    

    ksort($countries);
    echo "<h3>Sorted Array values are:</h3>";

    //opening table
    echo "<table border='1' width='250'><ir><th>Country</th> <th>Capital</th></tr>";

    //sorted array printing
    foreach($countries as $country => $capital){
        echo "<tr><td>$country</td> <td>$capital</td></tr>";
    }
    //closing table
    echo "</table>";

?>