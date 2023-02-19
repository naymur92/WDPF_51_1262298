<?php
    $cities = array("Dhaka", "Khulna", "Chuadanga", "Kushtia", "Dhaka", "Chuadanga", "Kushtia", "Kushtia", "Rajshahi");
    $stateFrequency = array_count_values($cities);

    print_r($stateFrequency);
?>