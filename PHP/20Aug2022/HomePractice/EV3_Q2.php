<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EV3_Q2</title>
</head>
<body>
    <h1>Factorial finder</h1>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter a number"><br>
        <input type="submit" name="submit" value="Find Factorial">
    </form>

    <?php
    
        function factFinder($n){
            if($n == 0){
                return 1;
            }
            return $n * factFinder($n - 1);
        }

        extract($_POST);
        if(isset($submit)){
            if($number == null){
                echo "<h3>Enter a number first!</h3>";
            }
            else{
                $output = factFinder($number);
                echo "<h3>Factorial of $number is: $output</h3>";
            }
        }
    
    ?>
</body>
</html>