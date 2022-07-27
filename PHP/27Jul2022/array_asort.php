<?php

    // $countries = ["Bangladesh"=>"Dhaka","India"=>"Delhi","Pakistan"=>"Lahore","Srilanka"=>"Colombo","Syria"=>"Damascus"];

    $countries["Bangladesh"] = array("Dhaka","Padma");

    $countries["India"] = array("Delhi","Tista");



    echo "<table border='1'; width='300'>

    <tr>

    <th>Country Name</th>

    <th>Capital</th>

    <th>River</th>

    </tr>";



    // asort($countries);

    foreach($countries as $country=>$capital){

        echo "<tr>

            <td>$country</td>";

        foreach($capital as $co){

            echo "<td>$co</td>";

        }

        echo "</tr>";

    }



    echo "</table>";





?>