<?php
    $spots = array("Ahsan Manjil", "Lalbagh Fort", "Sonargaon", "Buriganga River");

    echo current($spots)."\n";
    next($spots);
    next($spots);
    echo current($spots)."\n";
    prev($spots);
    echo current($spots)."\n";
    end($spots);
    echo current($spots)."\n";
    reset($spots);
    echo current($spots)."\n";
?>