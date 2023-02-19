<?php

    $email = "naymur@binarylogic.com";
    $domain = explode("@", $email);
    $domain = end($domain);

    $valid = checkdnsrr($domain, "MX");

    if($valid) echo "The domain has an MX record!\n";
    else echo "Connot locate MX recored for $domain\n";

?>