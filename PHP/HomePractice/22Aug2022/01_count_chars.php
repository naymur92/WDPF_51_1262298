<?php

    $str = "The rain in Spain falls mainly on the plain";
    $chart = count_chars($str, 1);
    // echo $chart;
    // print_r($chart);

    foreach($chart as $letter => $frequency) echo "Character ".chr($letter)." appears $frequency times.\n";

?>