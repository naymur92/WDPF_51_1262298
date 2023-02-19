<?php

    $countries = array(
        "Srilanka" => "Colombo",
        "Bangladesh" => "Dhaka",
        "Pakistan" => "Islamabad",
        "India" => "Delhi",
        "Nepal" => "Kathmundu",
        "Saudi Arabia" => "Riyad",
        "Afganistan" => "Kabul",
    );

    //sorting array
    ksort($countries);

    echo "<h3>Key Sorting- Ascending order.</h3>";
    //creating table
    echo "<table border='1'><tr><th>Country</th> <th>Capital</th></tr>";
    foreach($countries as $country => $capital){
        echo "<tr>
                <td>$country</td>
                <td>$capital</td>
            </tr>";
    }

    //closing table
    echo "</table>";

    //sorting array
    krsort($countries);

    echo "<h3>Key Sorting- Descending order.</h3>";
    //creating table
    echo "<table border='1'><tr><th>Country</th> <th>Capital</th></tr>";
    foreach($countries as $country => $capital){
        echo "<tr>
                <td>$country</td>
                <td>$capital</td>
            </tr>";
    }

    //closing table
    echo "</table>";

?>