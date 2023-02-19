<?php

    $path = "result.txt";

    $output = realpath($path); //realpath or fullpath
    print $output. "<br>";

    $path1 = "../01Aug2022/EmployeeInfo.php";
    echo realpath($path1)."<br>";

?>