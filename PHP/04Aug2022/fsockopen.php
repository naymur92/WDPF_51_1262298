<?php
    // Establish a port 80 connection with www.example.com
    $http = fsockopen("www.example.com",80);

    echo "<pre>";
    // Send a request to the server
    $req1 = "GET / HTTP/1.1\r\n";
    $req1 .= "Host: www.example.com\r\n";
    $req1 .= "Connection: Close\r\n\r\n";

    fputs($http, $req1);
    // Output the request results
    while(!feof($http)) {
        echo fgets($http, 1024);
    }
    fclose($http);
?>