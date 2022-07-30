<?php
    $code = array("DH", "CO", "NO", "BA");
    $districts = array("Dhaka", "Cumilla", "Noakhali", "Barisal");

    $combined = array_combine($code, $districts);
    print_r($combined);

?>