<?php

    $file = "myfile.txt";
    $fh = fopen($file, "r");
    // $fh1 = file($file);

    // print_r($fh);
    echo fgets($fh);
    // echo "<pre>";
    // print_r($fh1);

    while(!feof($fh)){
        echo fgets($fh). "<br>\n";
    }

    fclose($fh);

?>