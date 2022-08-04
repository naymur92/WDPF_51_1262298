<?php

    $line = "Vim is the greatest word processor ever created! Oh vim, how I love thee!";

    echo preg_match_all("/\bvim\b/i", $line, $matches); //preg_match finds only one value
    echo "<pre>\n";
    print_r($matches);
    echo "\n";

?>

<?php
    $userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";
    preg_match_all("/<b>(.*)<\/b>/U", $userinfo, $pat_array);
    // printf("%s <br /> %s", $pat_array[0][0], $pat_array[0][1]);
    // print_r($userinfo);
    print_r($pat_array);
?>