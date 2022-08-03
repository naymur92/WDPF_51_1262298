<?php

    $data = file_get_contents("article.txt");

    // echo $data;

    $contents = explode("\n", $data);

    foreach($contents as $content){
        echo $content. "<br>";
        // break;
    }

?>