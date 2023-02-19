<?php
    // Retrieving a Service's Port Number
    echo "HTTP's default port number is: ".getservbyname("http", "tcp")."\n";
    echo "SMTP's default port number is: ".getservbyname("smtp", "tcp")."\n";
    echo "POP3's default port number is: ".getservbyname("pop3", "tcp")."\n";

?>