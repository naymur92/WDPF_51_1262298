<?php
    $path1 = '/opt/lampp/htdocs/WDPF_51_1262298/PHP/; ls >output.txt';
    echo shell_exec('ls ' . $path1);      //This runs each commands seperately


    // echo shell_exec('ls ' . escapeshellcmd($path));
    // echo shell_exec('ls ' . escapeshellarg($path));

?>