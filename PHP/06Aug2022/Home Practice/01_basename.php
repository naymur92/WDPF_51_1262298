<?php

    $path = "/opt/lampp/htdocs/WDPF_51_1262298/PHP/06Aug2022/Home Practice/testfile.txt";

    printf("Filename: %s <br>",basename($path));
    printf("Filename without extension: %s <br>",basename($path, ".txt"));

?>