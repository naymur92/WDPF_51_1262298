<?php
    $foods = array("pasta", "steak", "fish", "potatoes", "burger", "pizza");
    $food = preg_grep("/(st)/", $foods);
    print_r($food);
?>