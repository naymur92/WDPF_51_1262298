<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EV2_Q1</title>
</head>
<body>
    <h1>Odd-Even Checking</h1>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter a number"><br>
        <input type="submit" name="submit" value="CHECK">
    </form>

    <?php
    
        function oddEven($n){
            if($n % 2 == 0){
                echo "<h3>$n is an even number.</h3>";
            } else{
                echo "<h3>$n is an odd number.</h3>";
            }
        }

        extract($_POST);
        if(isset($submit)){
            if($number == null){
                echo "<h3>Enter a number first!</h3>";
            }
            else oddEven($number);
        }
    
    ?>
</body>
</html>