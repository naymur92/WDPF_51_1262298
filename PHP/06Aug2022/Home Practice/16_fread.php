<?php

    $file = 'users.txt';

    //Open the file for reading
    $fh = fopen($file, 'r');

    //Read in the entire file
    $userdata = fread($fh, readfile($file));    //filesize() can be integer value
    echo $userdata;

    //Close the file handle
    fclose($fh);

?>