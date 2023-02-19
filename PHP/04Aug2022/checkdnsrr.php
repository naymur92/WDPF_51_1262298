<?php

    $domain = "prothomalo.com";
    $recordexists = checkdnsrr($domain, "MX");

    // print_r($recordexists);

    if($recordexists)
    echo "The domain $domain has a DNS record!\n";
    else
    echo "The domain $domain does not appear to have a DNS record!\n";

?>