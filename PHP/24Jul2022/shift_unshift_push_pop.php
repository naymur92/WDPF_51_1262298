<?php
    echo "<pre>\n";
    echo "Main array \n";
    $districts = array("Chuadanga", "Kushtia", "Dhaka");
    print_r($districts);

    echo "Array shift. Remove data from begining. \n";
    array_shift($districts);
    print_r($districts);

    echo "Array unshift. Add data at begining. \n";
    array_unshift($districts, "Rajshahi", "Chottogram");
    print_r($districts);

    echo "Array push. Add data at end. \n";
    array_push($districts, "Meherpur");
    print_r($districts);

     echo "Array pop. Remove data from end. \n";
    array_pop($districts);
    print_r($districts);

?>