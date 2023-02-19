<?php
    $string = "La pasta e il piattò piu amato in Italia";
    $translate = get_html_translation_table(HTML_ENTITIES);     // This is translation array
    // echo "<pre>";
    // print_r($translate);
    // echo "</pre>";

    echo strtr($string, $translate)."\n";
?>