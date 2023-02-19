<?php

    echo str_pad("Salad", 10) . "is good. \n";
    echo str_pad("Naymur", 18, "*", STR_PAD_BOTH). "\n";
    echo str_pad("Salad", 10, " ", STR_PAD_LEFT) . " is good. \n";
    echo str_pad("Salad", 10, "*", STR_PAD_RIGHT) . "\n";       // Default

?>