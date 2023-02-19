<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q2</title>
    <style>
        .text-red{
            color: red;
        }
        .text-green{
            color:green;
        }
    </style>
</head>
<body>
    <h2>Prime Number Finder</h2>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter a number"><br>
        <input type="submit" name="submit" value="CHECK PRIME">
    </form>


    <?php
    
        function checkPrime($n){
            if($n == 1){
                echo "<h3 class='text-red'>$n is not a prime number.</h3>";
                return;
            } else if($n == 2){
                echo "<h3 class='text-green'>$n is a prime number.</h3>";
                return;
            } else{
                for($count = 2; $count <= $n/2; $count++){
                    if($n%$count == 0){
                        echo "<h3 class='text-red'>$n is not a prime number.</h3>";
                        return;
                    }
                }
                echo "<h3 class='text-green'>$n is a prime number.</h3>";
                return;
            }

        }


        if(isset($_POST['submit'])){
            $number = $_POST['number'];

            if($number == null){
                echo "<h3 class='text-red'>Enter a number first!</h3>";
            } else if($number<1){
                echo "<h3 class='text-red'>Enter positive integer number</h3>";
            } else{
                checkPrime($number);
            }
        }
    
    ?>
</body>
</html>