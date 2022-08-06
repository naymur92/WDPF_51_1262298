<?php

    $file = "testfile.txt";
    date_default_timezone_set('Asia/Dhaka');    //set time zone to Dhaka
    printf("File last accessed: %s <br>", date("D, d M, Y g:i:sA", fileatime($file)));
    printf("File inode last changed: %s <br>", date("D, d M, Y g:i:sA", filectime($file)));
    printf("File last updated: %s <br>", date("D, d M, Y g:i:sA", filemtime($file)));

?>