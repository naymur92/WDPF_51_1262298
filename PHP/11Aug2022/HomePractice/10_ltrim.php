<?php
    $string = "naymur@gmail.com";
    $string = strstr($string, "@");

    // Trimming left side of a string
    echo ltrim($string, "@") . "\n";
?>