<?php
    //Capital letter smaller than small letter
    $str1 = "aA";
    $str2 = "oO";

    echo ord($str1)."\n";
    echo ord($str2)."\n";

    echo strcmp($str1, $str2)."\n";
?>