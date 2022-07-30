<?php
    $face = array("J", "Q", "K", "A");
    $number = array("2", "3", "4", "5", "6", "9");

    $merged = array_merge($face, $number);
    print_r($merged);

    shuffle($merged);
    print_r($merged);
?>