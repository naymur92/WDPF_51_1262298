<?php

    ini_set("date.timezone", "Asia/Dhaka");

    $file = "myfile.txt";

    $ctime = filectime($file);
    $atime = fileatime($file);
    $mtime = filemtime($file);

    echo "File Creation Time: " . date("h:i:s", $ctime) . "<br>";
    echo "File Access Time: " . date("h:i:s", $atime) . "<br>";
    echo "File Modification Time: " . date("h:i:s", $mtime) . "<br>";

?>