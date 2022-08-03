<?php

    $data = fopen("article.txt", 'r');

    echo filesize('article.txt') . "<br>";
    echo fread($data, 50);
    // echo fread($data, filesize('article.txt'));

?>