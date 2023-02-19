<?php
    $players = array();

    $players["Bangladesh"] = array("Tamim", "Sakib", "Mushfiq");
    $players["Srilanka"] = array("Sangakara", "Dilshan", "Mahela");
    $players["Australia"] = array("Smith", "Maxwell", "Warner");

    foreach($players as $country => $player){
        echo "<h1>$country </h1>";
        foreach($player as $pl){
            echo $pl. ", ";
        }
        echo "<br>";
    }
?>