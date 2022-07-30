<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    class MyClass {}
    class AnotherClass extends MyClass{}
    $obj = new AnotherClass();

    if($obj instanceof AnotherClass) {
    echo "The object is AnotherClass";
    }

    // The object is also an instance of the class it is derived from
    if($obj instanceof MyClass) {
    echo "The object is MyClass<br>";
    }

    ?>
</body>
</html>