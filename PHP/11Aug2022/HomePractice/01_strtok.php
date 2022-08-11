<?php

    $info = "J. Gilmore:jason@example.com|Columbus, Ohio";

    // delimiters include colon (:), vertical var (|), and comma (,)
    $tokens = ":|,";
    $tokenized = strtok($info, $tokens);

    // print out each element in $tokenized  array
    while ($tokenized) {
        echo "Element = $tokenized <br>";
        // Don't include the first argument in subsequent calls.
        $tokenized = strtok($tokens);
    }

?>