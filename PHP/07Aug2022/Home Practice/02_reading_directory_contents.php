<?php

    //Open a directory first
    $dh = opendir('/opt/lampp/htdocs/WDPF_51_1262298/');

    //Read Directory
    while($file = readdir($dh))
        echo "$file \n";
    
    //Closing the directory
    closedir($dh);

?>