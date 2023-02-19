<?php
    $students = array();

    $students[] = array("Naymur", "Chuadanga", "WDPF");
    $students[] = array("Dipu", "Barisal", "WDPF");
    $students[] = array("Sajib", "B-Baria", "Java");
    $students[] = array("Victor", "Barisal", "DDD");

    foreach($students as $student){
        vprintf("<p>Student's Name: %s<br>Home District: %s<br>Subject: %s</p>", $student);
        echo "<hr>";
    }

    // foreach($students as $student){
    //     foreach($student as $st){
    //         echo $st. "&nbsp;";
    //     }
    //     echo "<br>";
    // }
?>