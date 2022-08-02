<?php

    $file = "path_info.php";

    ini_set("date.timezone", "Asia/Dhaka");

    $time1 = fileatime($file);
    echo "File Access Time: ";
    echo date("h:i:s", $time1) . "<br>";
    
    $time2 = filectime($file);
    echo "File Created Time: ";
    echo date("h:i:s", $time2) . "<br>";

    $time3 = filemtime($file);
    echo "File Modified Time: ";
    echo date("h:i:s", $time3) . "<br>";

?>