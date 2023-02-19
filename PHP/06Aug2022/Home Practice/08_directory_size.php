<?php

    function directorySize($directory) {
        $directorySize = 0;

        //open the directory and read its contents.
        if($dh = opendir($directory)) {
            //Iterate through each directory entry.
            while(($filename = readdir($dh))) {
                //Filter out some of the unwanted directory entries
                if ($filename != "." && $filename != "..") {

                    //File, so determine size and add to total
                    if (is_file($directory."/".$filename)) {
                        $directorySize += filesize($directory."/".$filename);
                    }
                    
                    //New directory, so initiate recursion
                    if (is_dir($directory."/".$filename)){
                        $directorySize += directorySize($directory."/".$filename);
                    }
                }                
            }
        }
        closedir($dh);
        return $directorySize;
    }

    $directory = "/opt/lampp/htdocs/WDPF_51_1262298";

    $totalsize = directorySize($directory);
    printf("Total size of the directory in Byte= %.2f Byte<br>",$totalsize);
    printf("Total size of the directory in KiloByte= %.2f KB<br>",round($totalsize/1024, 2));
    printf("Total size of the directory in MegaByte= %.2f MB<br>",round($totalsize/1024/1024, 2));

?>