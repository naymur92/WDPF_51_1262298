<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EV4_Q2</title>
</head>
<body>
    <h1>Result Checking</h1>
    <form action="" method="post">
        <input type="text" name="marks" placeholder="Enter your marks"><br><br>
        <input type="submit" name="submit" value="Show Result">
    </form>

    <?php
        extract($_POST);
        
        function resultCheck($n){
            if($n > 100 || $n < 0){
                echo "<h3>Please enter valid marks (0-100)!</h3>";
                return false;
            }
            echo "<h3>Your marks= $n</h3>";
            if($n >= 90){
                echo "<h3>Your grade= A+</h3>";
            } else if($n >= 80){
                echo "<h3>Your grade= A</h3>";
            } else if($n >= 60){
                echo "<h3>Your grade= A-</h3>";
            } else if($n < 60){
                echo "<h3>Your grade= F</h3>";
            }
        }

        if(isset($submit)){
            if($marks == null){
                echo "<h3>Please enter your marks first!!!</h3>";
            } else resultCheck($marks);
        }
    ?>
</body>
</html>