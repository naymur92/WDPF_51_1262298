<?php
    $number = 100;
    $numbers = [10, 20, 63];
    $string = "Hello World";

    echo "Gettype (Number):". gettype($number);
    echo "<br>";
    echo "Gettype (String):". gettype($string);

    echo "<br>";
    echo "Is Int: (String):". is_int($string);
    // output null

    echo "<br>";
    echo "Is Int: (Number):". is_int($number);

    echo "<br>";
    echo "Is String (String):". is_string($string);

    $yes = true;
    echo "<br>";
    echo "Boolean:". is_bool($yes);
    
    echo "<br>";
    echo "Scalar:". is_scalar($number);

    echo "<br>";
    echo "Scalar:". is_scalar($numbers);

?>