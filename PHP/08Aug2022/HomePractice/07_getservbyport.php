<?php
    // Retrieving a Port Number's Service Name
    echo "Port 80's default service is: ".getservbyport(80, "tcp")."\n";
    echo "Port 25's default service is: ".getservbyport(25, "tcp")."\n";
    echo "Port 110's default service is: ".getservbyport(110, "tcp")."\n";

?>