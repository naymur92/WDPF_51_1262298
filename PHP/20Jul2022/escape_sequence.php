<?php
    $output = "This is one line. \nAnd this is another line.\n";
    $output1 = 'This is one line. \nAnd this is another line.';
    $output2 = 'This is one line.' . "\n" . 'And this is another line';
    
    // echo "<pre>";
    echo $output;
    echo $output1;
    echo "\n";
    echo $output2;
    echo "\n";
?>

<?php
    $students = array("Dipu"=>"Barisal", "Naymur"=>"Chuadanga");

    // echo $students['Dipu'];
    echo "Dipu's home district is {$students['Dipu']}\n";
?>