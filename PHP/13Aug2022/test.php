<?php

    $string = "this is\t some text \n we might";
    print_r(preg_split("/[\t\n]/", $string));
?>