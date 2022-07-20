<?php
    $output = "This is one line. \n And this is another line. <br>";
    $output1 = 'This is one line. \n And this is another line. <br>';
    $output2 = 'This is one line.' . "\n" . 'And this is another line';

    echo "<pre>";
    echo $output;
    echo $output1;
    echo $output2;
?>

<?php
    $students = array("Dipu"=>"Barisal", "Naymur"=>"Chuadanga");

    // echo $students['Dipu'];
    echo "Dipu's home district is {$students['Dipu']}";
?>