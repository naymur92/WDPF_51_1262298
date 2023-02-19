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
        // if(isset($_POST['submit'])){
        //     $operand1 = $_POST['first'];
        //     $operand2 = $_POST['last'];

        //     $sum = $operand1 + $operand2;
        //     $sub = $operand1 - $operand2;
        //     // $mult = $operand1 * $operand2;
        //     // $div = $operand1 / $operand2;
        //     $mod = $operand1 % $operand2;

        //     echo "Summation of $operand1 and $operand2 = <b>$sum</b> <br>";
        //     echo "Subtraction of $operand1 and $operand2 = <b>$sub</b> <br>";
        //     echo "Multiplication of $operand1 and $operand2 = <b>" .$operand1 * $operand2. "</b> <br>";
        //     echo "Division of $operand1 and $operand2 = <b>" .$operand1 / $operand2. "</b> <br>";
        //     // echo "Division of $operand1 and $operand2 = <b>$div</b> <br>";
        //     echo "Module reduction of $operand1 and $operand2 = <b>$mod</b> <br>";
        // }

        
        // if($_SERVER['REQUEST_METHOD']=='POST'){
        //     $operand1 = $_POST['first'];
        //     $operand2 = $_POST['last'];

        //     $sum = $operand1 + $operand2;
        //     $sub = $operand1 - $operand2;
        //     // $mult = $operand1 * $operand2;
        //     // $div = $operand1 / $operand2;
        //     $mod = $operand1 % $operand2;

        //     echo "Summation of $operand1 and $operand2 = <b>$sum</b> <br>";
        //     echo "Subtraction of $operand1 and $operand2 = <b>$sub</b> <br>";
        //     echo "Multiplication of $operand1 and $operand2 = <b>" .$operand1 * $operand2. "</b> <br>";
        //     echo "Division of $operand1 and $operand2 = <b>" .$operand1 / $operand2. "</b> <br>";
        //     // echo "Division of $operand1 and $operand2 = <b>$div</b> <br>";
        //     echo "Module reduction of $operand1 and $operand2 = <b>$mod</b> <br>";
        // }

        // echo is_null($_POST['first']);

        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $operand1 = $_POST['first'];
            $operand2 = $_POST['last'];

            if(($_POST['first']==null) || ($_POST['last']==null)){
                echo "Please Enter Both value";
            }
            else{
                $sum = $operand1 + $operand2;
                $sub = $operand1 - $operand2;
                // $mult = $operand1 * $operand2;
                // $div = $operand1 / $operand2;
                $mod = $operand1 % $operand2;
    
                echo "Summation of $operand1 and $operand2 = <b>$sum</b> <br>";
                echo "Subtraction of $operand1 and $operand2 = <b>$sub</b> <br>";
                echo "Multiplication of $operand1 and $operand2 = <b>" .$operand1 * $operand2. "</b> <br>";
                echo "Division of $operand1 and $operand2 = <b>" .$operand1 / $operand2. "</b> <br>";
                // echo "Division of $operand1 and $operand2 = <b>$div</b> <br>";
                echo "Module reduction of $operand1 and $operand2 = <b>$mod</b> <br>";
            }
        }
        


        // if($_SERVER['REQUEST_METHOD']=='POST'){
        //     $f = $_POST['first'];
        //     $l = $_POST['last'];
        //     if($f==''|| $l ==''){
        //         echo "Please put both values";
        //     } else{
        //         $operand1 = $_POST['first'];
        //         $operand2 = $_POST['last'];

        //         $sum = $operand1 + $operand2;
        //         $sub = $operand1 - $operand2;
        //         // $mult = $operand1 * $operand2;
        //         // $div = $operand1 / $operand2;
        //         $mod = $operand1 % $operand2;

        //         echo "Summation of $operand1 and $operand2 = <b>$sum</b> <br>";
        //         echo "Subtraction of $operand1 and $operand2 = <b>$sub</b> <br>";
        //         echo "Multiplication of $operand1 and $operand2 = <b>" .$operand1 * $operand2. "</b> <br>";
        //         echo "Division of $operand1 and $operand2 = <b>" .$operand1 / $operand2. "</b> <br>";
        //         // echo "Division of $operand1 and $operand2 = <b>$div</b> <br>";
        //         echo "Module reduction of $operand1 and $operand2 = <b>$mod</b> <br>";
        //     }            
        // }
    ?>

    <h1>Calculation Form</h1>
    <form action="<? $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="first" placeholder="Enter 1st number"><br>
        <input type="text" name="last" placeholder="Enter last number"><br>
        <input type="submit" name="submit" value="CALCULATION">
    </form>
</body>
</html>