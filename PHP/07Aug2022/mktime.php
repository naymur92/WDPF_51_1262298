<?php

    $timestamp = mktime(15, 25, 45, 8, 27, 2022);   //Hour, Minute, Sec, Month, Day, Year

    // $output = getdate($timestamp);
    // print_r($output);
    $time = time();
    // echo date("d-m-Y h:i:s A", $timestamp) . "\n";


    $diff = $timestamp - $time;

    //Calculating remaining time
    $sec = $diff % 60;
    $diff = (int)($diff/60);

    $min = $diff % 60;
    $diff = (int)($diff/60);

    $hrs = $diff % 24;
    $diff = (int)($diff/24);

    $day = $diff % 30;
    $mon = (int)($diff/30);

    echo "<h3>Remaining time.</h3>";
    printf("Month: %d, Day: %d, Hours: %d, Min: %d, Sec: %d", $mon, $day, $hrs, $min, $sec);

?>