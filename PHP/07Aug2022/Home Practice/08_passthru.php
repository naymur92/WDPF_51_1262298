<?php
    //passthru() function run command line commands
    $command = 'ls';
    passthru($command);

    $command = '~ ls';
    passthru($command);

    $command = 'ls /opt/lampp/htdocs/WDPF_51_1262298/';
    passthru($command);

?>