<?php
    // Type Juggling

    // ini_set('display_errors', 0);

    // $string = "50 is the price of Mango";
    $string = "The price of Mango is 50";
    $qty = 100;
    $total = $string * $qty;
    echo $total;
?>

<?php
    $num1 = 1.66e5;
    $num2 = 5;

    $total = $num1 * $num2;
    echo "<br>";
    echo $total;
?>