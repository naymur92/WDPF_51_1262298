<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EV1_Q3</title>
</head>
<body>
    <h1>Prime Checking</h1>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter a number"><br>
        <input type="submit" name="submit" value="CHECK PRIME">
    </form>

    <?php
    
        function primeChecker($n){
            if($n == 1){
                echo "<h3>$n is not a prime number!</h3>";
            } else if($n == 2){
                echo "<h3>$n is a prime number!</h3>";
            } else{
                for($i = 2; $i <= $n/2; $i ++){
                    if($n % $i == 0){
                        echo "<h3>$n is not a prime number!</h3>";
                        return false;
                    }
                }
                echo "<h3>$n is a prime number!</h3>";
            }
        }

        extract($_POST);
        if(isset($submit)){
            if($number == null){
                echo "<h3>Enter a number first!</h3>";
            }
            else primeChecker($number);
        }
    
    ?>
</body>
</html>