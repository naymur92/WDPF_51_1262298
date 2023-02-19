<?php

    $path = "/opt/lampp/";

    $freespace = diskfreespace($path);      //also works disk_free_space($path)
    echo "<h2>Disk Free Space</h2>";
    printf("Byte= %.2f <br>", $freespace);
    printf("KiloByte= %.2f <br>", round($freespace/1024 ,2));
    printf("MegaByte= %.2f <br>", round($freespace/1024/1024 ,2));
    printf("GigaByte= %.2f <br>", round($freespace/1024/1024/1024 ,2));

?>