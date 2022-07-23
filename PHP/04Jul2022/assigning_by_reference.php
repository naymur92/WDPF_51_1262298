<?php
    $value1 = "Hello";
    $value2 =& $value1;
    $value2 = "World";
    // $value1 = "Wd";

    echo $value1;
    echo "<br>";
    echo $value2;
?>