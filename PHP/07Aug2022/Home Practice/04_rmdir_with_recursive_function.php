<?php

    function deleteDirectory($dir) {

        //Open a directory handle
        if ($dh = opendir($dir)) {
            
            //Iterate through directory handle
            while (($file = readdir($dh)) != false) {

                //Skip files . and ..
                if (($file == ".") || ($file == "..")) continue;
                if (is_dir($dir . '/' . $file)) {
                    //Recursive call to delete subdirectory
                    deleteDirectory($dir . '/' . $file);
                } else {
                    //Delete file
                    unlink($dir . '/' . $file);
                }
            }
            closedir($dh);
            rmdir($dir);
        }
    }

    $dir = '/opt/lampp/htdocs/WDPF_51_1262298/PHP/07Aug2022/Home Practice/Testing deleteDirectory/folder 1 copy';
    deleteDirectory($dir);

?>