<?php
    $students = array();

    $students["1262298"] = "Naymur Rahman";
    $students["1269985"] = "Abu Naser Dipu";
    $students["1258745"] = "Jobayer Islam";
    $students["1236698"] = "Amzad Hossen";
    $students["1548745"] = "Aminul Toky";
    $students["1269874"] = "Golam Rabbany";
    $students["1369852"] = "Anamul Hasan";

    echo "<h1>Students Table</h1>";
    //Creating table
    echo "<table border='1' width='400'>";
    echo "<tr><th>Sl. No.</th> <th>ID</th> <th>Student Name</th></tr>";

    $count = 1;
    foreach($students as $ID => $student){
        echo "<tr><td>$count</td> <td>$ID</td>";
        echo "<td>$student</td></tr>";
        $count++;
    }

    //Closing table
    echo "</table>";
?>