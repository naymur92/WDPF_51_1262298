<?php

    // $str1 = "abC";
    // $str2 = "abc";

    // echo strcmp($str1, $str2) . "\n";

?>

<?php
    $pswd = "supersecret";
    $pswd2 = "supersecret2";
    if (strcmp($pswd, $pswd2) != 0) {
        echo "Passwords do not match! \n";
    } else {
        echo "Passwords match! \n";
    }
?>