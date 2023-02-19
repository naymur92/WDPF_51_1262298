<?php
    //Every time change the file to see what happens
    $file = "../../06Aug2022/Home Practice/users.txt";
    date_default_timezone_set('Asia/Dhaka');    //set time zone to Dhaka

    echo "<h3>Previous Time</h3>";
    printf("File last accessed: %s <br>", date("D, d M, Y g:i:sA", fileatime($file)));
    printf("File inode last changed: %s <br>", date("D, d M, Y g:i:sA", filectime($file)));
    printf("File last updated: %s <br>", date("D, d M, Y g:i:sA", filemtime($file)));

    //Touching the file
    touch($file);

    echo "<h3>New Time</h3>";
    printf("File last accessed: %s <br>", date("D, d M, Y g:i:sA", fileatime($file)));
    printf("File inode last changed: %s <br>", date("D, d M, Y g:i:sA", filectime($file)));
    printf("File last updated: %s <br>", date("D, d M, Y g:i:sA", filemtime($file)));

?>