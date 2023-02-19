<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Finder</title>
    <style>
        .not_prime{
            color: red;
        }
        .prime{
            color: green;
        }
    </style>
</head>
<body>
    <h2>Prime Number Finder</h2>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter a number">
        <input type="submit" name="submit" value="CHECK">
    </form>

    <?php
        if(isset($_POST['submit'])){            
            CheckPrime();
        }
        function CheckPrime(){
            $number = $_POST['number'];
            if($number==1){
                echo "<h3 class='not_prime'>$number is not a prime number.</h3>";
                return;
            }
            else if($number==2){
                echo "<h3 class='prime'>$number is a prime number.</h3>";
                return;
            }
            else{
                for($n=2; $n<=$number/2; $n++){
                    if($number%$n==0){
                        echo "<h3 class='not_prime'>$number is not a prime number.</h3>";
                        return;
                    }
                }
                echo "<h3 class='prime'>$number is a prime number.</h3>";
                return;
            }
        }
    ?>
</body>
</html>