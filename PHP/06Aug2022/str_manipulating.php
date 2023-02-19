<?php

    $str = "Hello World, How are you with giving extra amount in oil?";

    $lower = strtolower($str);
    echo "All in lowercase:\t\t $lower \n";

    $ucfirst = ucfirst($lower);
    echo "First letter in uppercase:\t\t $ucfirst \n";

    $ucwords = ucwords($ucfirst);
    echo "First letter of each word in uppercase:\t\t $ucwords \n";

    $upper = strtoupper($ucwords);
    echo "All in uppercase:\t\t $upper \n";

    $lcfirst = lcfirst($upper);
    echo "First letter in lower:\t\t $lcfirst \n";

?>