<?php

    $path = "/opt/lampp/htdocs/WDPF_51_1262298/PHP/02Aug2022/result.txt";

    $output = pathinfo($path);
   
    print_r($output); //without extension
    echo "\n";

    echo $output['dirname']. "\n";
    echo $output['basename']. "\n";
    echo $output['extension']. "\n";
    echo $output['filename']. "\n";
?>