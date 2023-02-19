<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Finder</title>
</head>
<body>
    <h2>Prime Number Finder</h2>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter a number">
        <input type="submit" name="submit" value="CHECK">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $number = $_POST['number'];
            $counter = 0;

            if($number==1){
                $counter ++;
            }
            else if($number==2){
                $counter =0;
            }
            else{
                for($n = 2; $n<=$number/2; $n++){
                    if($number%$n==0){
                        $counter++;
                        break;
                    }
                }
            }

            if($counter==0){
                echo "<h3>$number is a prime number.</h3>";
            }
            else{
                echo "<h3>$number is not a prime number.</h3>";
            }
        }
    ?>
</body>
</html>