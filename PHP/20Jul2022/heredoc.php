<?php
    $students = array("Dipu"=>"Barisal", "Naymur"=>"Chuadanga");

    echo <<<ABC
    We have two students. One is Dipu and another is Naymur.
    Dipu's home district is {$students['Dipu']} and Naymur's home district is {$students['Naymur']}.<br><br>
    ABC;


    $dipu = "Barisal";
    $naymur = "Chuadanga";
    echo <<<DEF
    We have two students. One is Dipu and another is Naymur.
    Dipu's home district is $dipu and Naymur's home district is $naymur.
    DEF;
?>