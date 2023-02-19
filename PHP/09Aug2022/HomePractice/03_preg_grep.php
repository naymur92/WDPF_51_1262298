<?php

    $foods = array("pasta", "steak", "fish", "potatoes", "noodles masala");
    // $food = preg_grep("/^p/", $foods);      // Starts with p
    // $food = preg_grep("/a\$/", $foods);     // Ends with a
    $food = preg_grep("/a\$/", $foods, PREG_GREP_INVERT);     // Return those values do no ends with a

    print_r($food);

?>