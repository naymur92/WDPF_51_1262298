<?php

    echo date_default_timezone_get() . "\n";
    ini_set("date.timezone", "Asia/Singapore");
    // date_default_timezone_set("Asia/Singapore");
    echo date_default_timezone_get() . "\n";


    echo date("d-M-Y h:i:s A") . "\n";


?>