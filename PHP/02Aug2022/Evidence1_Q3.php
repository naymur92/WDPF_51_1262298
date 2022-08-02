<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prime number check</h1>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter a number">
        <input type="submit" name="submit" value="CHECK PRIME">
    </form>

    <?php
    
        function checkPrime($n){
            if($n < 0){
                echo "Enter a positive number.";
                return;     
            }
            if($n == 0){
                echo "$n is a prime number.";
                return;
            } else if($n == 1){
                echo "$n is not a prime number.";
                return;
            } else{
                for($count = 2; $count<=$n/2; $count++){
                    if($n%$count==0){
                        echo "$n is not a prime number.";
                        return;
                    }
                }
                echo "$n is a prime number.";
                return;
            }
        }


        if(isset($_POST['submit'])){
            $number = $_POST['number'];
            if($number == null){
                echo "Please enter a number first.";
            } else{
                checkPrime($number);
            }
        }
    
    ?>
</body>
</html>