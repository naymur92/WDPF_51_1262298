<?php

    $domain = "www.thedailystar.com";
    $recordexists = checkdnsrr($domain, "ANY");

    if($recordexists)
        echo "The domain '$domain' has a DNS record!\n";
    else
        echo "The domain '$domain' does not appear to have a DNS record!\n";
    
    echo checkdnsrr($domain, "TXT"). "\n";

?>