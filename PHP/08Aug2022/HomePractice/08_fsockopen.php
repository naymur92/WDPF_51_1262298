<?php

    // Estabsish a port 80 connection with www.example.com
    $http = fsockopen("www.example.com", 80);

    // Send a request to the server
    $req = "GET / HTTP/1.1\r\n";
    $req .= "HOST: www.example.com\r\n";
    $req .= "Connection: Close\r\n\r\n";

    fputs($http, $req);
    echo "<pre>";
    // Output the request results
    while(! feof($http)){
        echo fgets($http, 1024);
    }

?>