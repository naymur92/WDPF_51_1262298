<?php

    $domain = "www.prothomalo.com";
    $result = dns_get_record($domain, DNS_HINFO);

    echo "<pre>";
    print_r($result);

?>