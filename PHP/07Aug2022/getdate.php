<?php

    $timestmp = time();
    $result = getdate($timestmp);
    // print_r($result);

    echo "\n";

    echo "Today's date is: ". $result['mday'] . "\tMonth is: ". $result['month']."\n";

    echo date("Y-m-d", time()) . "\n";


?>