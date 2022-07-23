<?php
    echo "<pre> \n";

    for($n = 1; $n<=10;  $n++){
        echo "$n \t";
    }
    print "\n";

    $n1 = 10;
    for(;$n1>0;$n1--){
        echo "$n1 \t";
    }
    print "\n";

    $n2 = 1;
    for(;;$n2++){
        if($n2>10) break;
        echo "$n2 \t";
    }
    print "\n";

    $n3 = 10;
    for(;;){
        if($n3<1)break;
        echo "$n3 \t";
        $n3--;
    }
    echo "\n";
?>