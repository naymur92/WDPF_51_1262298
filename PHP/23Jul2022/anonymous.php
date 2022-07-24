<?php
    $x = 15;
    // $output = function(){
    $output = function() use($x){
    // $output = function() use(&$x){
        $x += 100;
        echo $x . "\n";
    };
    $output();
    echo $x ."\n";
?>

<?php
    // function myEcho(){
    //     echo "Clouser.\n";
    // };
    // $output = "myEcho";
    // $output();
?>