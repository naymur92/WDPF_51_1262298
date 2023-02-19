<?php

    //open a handle to users.txt
    $fh = fopen('users.txt', 'r');  //r for reading only

    // echo (fopen('users.txt', 'r'));  //Testing file handler value

    while(!feof($fh)) echo fgets($fh);

    //close the handle
    fclose($fh);

?>