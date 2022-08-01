<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Maximum Number Finder</h1>
    <form action="" method="post">
        <input type="text" size="50" name="numbers" placeholder="Enter numbers seperated by commas" value="<? if(isset($_POST['numbers'])) echo $_POST['numbers']; ?>"><br>
        <input type="submit" name="submit" value="FIND MAXIMUM">
    </form>


    <?php
    
        if(isset($_POST['submit'])){
            $n = $_POST['numbers'];

        //function calling
            maxNumber($n);
        }

        //creating function
        function maxNumber($n){
            $numbers = explode(",", $n);
            
        //print array values
            echo "<h2>Submitted numbers are:</h2>";
            foreach($numbers as $number){
                echo $number . "<br>";
            }

        //finding maximum value
            $max = $numbers[0];
            foreach($numbers as $number){
                if($number >= $max){
                    $max = $number;
                }
            }

        //outputting max value
            echo "<h2>Maximum Number= ". $max . "</h2>";

        }
    
    ?>
</body>
</html>