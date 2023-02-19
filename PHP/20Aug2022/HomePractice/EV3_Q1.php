<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EV3_Q1</title>
</head>
<body>
    <h1>Maximum value finder</h1>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter numbers seperated by commas" size="50"><br>
        <input type="submit" name="submit" value="FIND MAXIMUM NUMBER">
    </form>

    <?php
    
        function maxFinder($n){
            echo "<h3>Submitted numbers are:</h3>";
            echo $n;

            $numbers = explode(",", $n);
            $max = $numbers[0];

            foreach($numbers as $number){
                if($number >= $max) $max = $number;
            }
            return $max;
        }

        extract($_POST);
        if(isset($submit)){
            if($number == null){
                echo "<h3>Enter numbers first!</h3>";
            }
            else{
                $max = maxFinder($number);
                echo "<h3>Maximum Number is: $max</h3>";
            }
        }
    
    ?>
</body>
</html>