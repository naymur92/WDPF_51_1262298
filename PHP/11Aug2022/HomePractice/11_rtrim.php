<?php

    $string = "naymur@gmail.com";
    $string = substr($string, 0, 7);
    // echo $string . "\n";

    // Trimming right side of a string
    echo rtrim($string, "@") . "\n";

?>