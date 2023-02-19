<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Finder</title>
    <style>
        .empty{
            color: red;
        }
        .success{
            color: green;
        }
    </style>
</head>
<body>
    <h1>Factorial Finder</h1>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter a number">
        <input type="submit" name="submit" value="FIND FACTORIAL">
    </form>


    <?php
    function factorial($n){
        if($n==0) return 1;
        return $n* factorial($n-1);
    }
    
    if(isset($_POST['submit'])){
        $number = $_POST['number'];
        if($number == null){
            echo "<h3 class='empty'>Please Enter a number first!</h3>";
        } else{
            $fact = factorial($number);
            echo "<h3 class='success'>Factorial of {$number} is: {$fact}</h3>";
        }        
    }
?>
</body>
</html>