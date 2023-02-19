<?php

    //Open a file handler. set pointer to begining of the file
    $fh = fopen('testfile.txt', 'r');

    //Retriving position using ftell() function
    echo "Current Position of the file is: " . ftell($fh). "<br>";

    //Set the position using fseek() function
    fseek($fh, 2);      //No whence here
    echo "Current Position of the file is: " . ftell($fh). "<br>";

    fseek($fh, 5, SEEK_CUR);
    echo "Current Position of the file is: " . ftell($fh). "<br>";

    fseek($fh, 0, SEEK_END);
    echo "Current Position of the file is: " . ftell($fh). "<br>";

    fseek($fh, -10, SEEK_END);
    echo "Current Position of the file is: " . ftell($fh). "<br>";

    //Moving the file pointer back to the beginning of the file
    rewind($fh);        //This is also doen with fseek($fh, 0)
    echo "Current Position of the file is: " . ftell($fh). "<br>";


?>