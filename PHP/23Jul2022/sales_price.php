<?php
//     function salesPrice($cost, $trans){
//         $total = $cost + ($cost*$trans/100);
//         return $total;
//     }
//    echo "Total cost is ". salesPrice(750, 5);
?>

<?php
    function salesPrice($cost, $trans=5){
        $total = $cost + ($cost*$trans/100);
        return $total;
    }
    $x = 550;
    // $y =  15;
    echo "Total cost is ". salesPrice($x);
?>