<?php

    $directory = "/opt/";

    $bytes = disk_free_space($directory);
    $kb = round($bytes/1024);
    $mb = round($kb/1024);
    $gb = round($mb/1024);

    echo "<h3>Disk Free Space</h3>";
    echo "Bytes = $bytes Byte<br>";
    echo "KiloBytes = $kb KB<br>";
    echo "MegaBytes = $mb MB<br>";
    echo "GigaBytes = $gb GB<br>";

?>