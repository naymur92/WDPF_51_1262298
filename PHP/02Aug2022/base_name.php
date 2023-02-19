<?php

    $path = "/opt/lampp/htdocs/WDPF_51_1262298/PHP/02Aug2022/result.txt";

    $output = basename($path, ".txt");
    $output1 = basename($path);

    echo $output; //without extension
    echo "\n";
    echo $output1; //with extension;
    echo "\n";
?>