<?php
    //To access languages.pl file you must change its permission
    $path = "/opt/lampp/htdocs/WDPF_51_1262298/PHP/07Aug2022/Home\ Practice/languages.pl";

    exec($path, $results);
    foreach ($results as $result) echo $result;

?>