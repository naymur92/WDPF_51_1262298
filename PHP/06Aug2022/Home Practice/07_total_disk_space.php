<?php

    $path = "/opt/";

    $totalspace = disk_total_space($path);      //also works disk_free_space($path)
    echo "<h2>Disk Total Space</h2>";
    printf("Byte= %.2f <br>", $totalspace);
    printf("KiloByte= %.2f <br>", round($totalspace/1024 ,2));
    printf("MegaByte= %.2f <br>", round($totalspace/1024/1024 ,2));
    printf("GigaByte= %.2f <br>", round($totalspace/1024/1024/1024 ,2));

?>