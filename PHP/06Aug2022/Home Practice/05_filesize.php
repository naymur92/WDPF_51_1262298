<?php

    $path = "testfile.txt";
    $size = filesize($path);
    $basename = basename($path);

    echo "File size of $basename in byte: $size byte";

    echo "<br><br>";

    $path = "../../Beginning PHP and MySQL_ From Novice to Professional 5th Edition.Pdf";
    $pathinfo = pathinfo($path);
    $ext = $pathinfo['extension'];
    $size = filesize($path);

    printf("File size of %s file in byte: %.2f Byte <br>", $ext, $size);
    printf("File size of %s file in KiloByte: %.2f KB <br>", $ext, (round($size/1024, 2)));
    printf("File size of %s file in MegaByte: %.2f MB <br>", $ext, (round($size/1024/1024, 2)));




?>