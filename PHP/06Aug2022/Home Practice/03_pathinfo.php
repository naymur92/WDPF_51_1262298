<?php

    $path = "/opt/lampp/htdocs/WDPF_51_1262298/PHP/06Aug2022/Home Practice/testfile.txt";
    $pathinfo = pathinfo($path);
    // echo "<pre>";
    // print_r($pahtinfo);

    printf("Dir name: %s <br>", $pathinfo['dirname']);
    printf("Base name: %s <br>", $pathinfo['basename']);
    printf("Extension: %s <br>", $pathinfo['extension']);
    printf("File name: %s <br>", $pathinfo['filename']);

?>