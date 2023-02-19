<?php
    $users = file("users.txt");

    foreach($users as $user){
        list($usr1,$usr2,$usr3,$usr4) = explode("|", $user);
        echo "Name: {$usr1} <br>Name: {$usr2}<br>Name: {$usr3}<br>Name: {$usr4}";
        echo "<hr>";
    }
?>