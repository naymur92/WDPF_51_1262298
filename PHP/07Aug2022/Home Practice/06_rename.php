<?php

    $file = '/opt/lampp/htdocs/WDPF_51_1262298/PHP/07Aug2022/Home Practice/testfile copy.txt';

    //rename() function runs with terminal & it moves that file or folder to base folder
    rename($file, "testfile newname.txt");

?>

<?php

    $dir = '/opt/lampp/htdocs/WDPF_51_1262298/PHP/07Aug2022/Home Practice/Testing deleteDirectory/empty copy';

    rename($dir, "empty 2");

?>