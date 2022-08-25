<?php

    $mysqli = new mysqli('localhost', 'naymur', 'abcd', 'wdpf51');
    if($mysqli->connect_errno){
        echo $mysqli->connect_errno;
        echo "<br>";
    }

    echo $mysqli->connect_error;
    echo "<br>";

?>