<?php

    $line = "vim is the greatest word processor ever created! Oh Vim, how I love thee!";
    $line2 = "grEatest word processor ever creATed!";

    // This returns array as group match -> Default(PREG_PATTERN_ORDER)
    preg_match_all("/(ea)(t)/i", $line2, $matches);

    // This returns an array for every matching
    // preg_match_all("/(ea)(t)/i", $line2, $matches, PREG_SET_ORDER);

    // This returns matches and their offset
    // preg_match_all("/\bVim/i", $line, $matches, PREG_OFFSET_CAPTURE);

    print_r($matches);

?>