<?php
// Type Casting
    $x = (int) 15.45;

    $converted_x = (string) $x;

    var_dump($x);
    echo "<br>";

    var_dump($converted_x);
    echo "<br>";

    $price = 50.55;
    $converted_price = (int) $price;

    var_dump($price);
    echo "<br>";

    var_dump($converted_price);
    echo "<br>";

    $name = "Naymur Rahman";
    $converted_name = (int) $name;

    var_dump($name);
    echo "<br>";

    var_dump($converted_name);
    echo "<br>";
    echo "<br>";
?>


<?php
// Array Conversion
    $name = "Naymur Rahman";
    $converted = (array) $name;

    var_dump($name);
    echo "<br>";

    var_dump($converted);
    echo "<br>";

    $miles = 125;
    $casted = (array) $miles;

    var_dump($casted);
    echo "<br>";

    echo $casted[0];
?>

<?php
    // Object Conversion
    $car = "Toyota";
    $converted = (object) $car;

    echo "<br>";
    var_dump($converted);
    echo "<br>";
    echo $converted->scalar;

    $car = ["Toyota", "BMW"];
    $converted = (object) $car;

    echo "<br>";
    var_dump($converted);
    echo "<br>";
    // echo $converted;
?>