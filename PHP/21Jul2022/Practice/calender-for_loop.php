<?php
    echo "<h3>July, 2022</h3>";
    echo "<pre> \n";

    $days = array("Sat", "Sun", "Mon", "Tue", "Wed", "Thu", "Fri");

    foreach($days as $day){
        echo "$day \t";
    }
    echo "\n";

    //$first_date values
    //Saturday=0, Sunday=1, Monday=2, Tuesday=3, Wednesday=4, Thursday=5, Friday=6
    $first_date = 6;

    for($count=1; $count<=$first_date; $count++){
        echo "\t";
    }
    for($date=1; $date<=31; $date++){
        echo "$date \t";
        if(($date%7)==(7-$first_date)){
            echo "\n";
        }
    }
    echo "\n";
?>