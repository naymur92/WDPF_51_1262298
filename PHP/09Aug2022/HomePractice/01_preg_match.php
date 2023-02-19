<?php

    $line = "vim is vIMs the greatest word processor ever created! Oh Vim, how I love thee!";
    preg_match("/\bVim\b/i", $line, $matches);      // This matches only one item

    print_r($matches);

?>