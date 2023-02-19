<?php

    $file = "../PHP-Cheat-Sheet.pdf";

    $bytes = filesize($file);
    $kilobytes = round($bytes/1024,2);

    $filename = basename($file);
    // echo $bytes . "\n";
    // echo $kilobytes . "\n";
    echo "My file name is \"$filename\" and it's size in byte is \"$bytes bytes\" and in Kilobytes \"$kilobytes KB\"";

?>