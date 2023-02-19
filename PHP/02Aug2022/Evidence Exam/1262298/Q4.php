<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q4</title>
</head>
<body>
    <h2>Result Checking</h2>
    <form action="" method="post">
        <input type="text" name="grade" placeholder="Enter your grade">
        <input type="submit" name="submit" value="CHECK RESULT">
    </form>

    <?php
    
        if(isset($_POST['submit'])){
            $grade = $_POST['grade'];
            
            if($grade == null){
                echo "<h3>Enter your Grade first!</h3>";
            } else{
                //main program
                if($grade == "A"){
                    echo "<h3>Excellent</h3>";
                } else if($grade == "B"){
                    echo "<h3>Good</h3>";
                } else if($grade == "C"){
                    echo "<h3>Fair</h3>";
                } else if($grade == "D"){
                    echo "<h3>Poor</h3>";
                } else if($grade == "F"){
                    echo "<h3>Failure</h3>";
                } else{
                    echo "<h3>Enter correct Grade!</h3>";
                }
            }            
        }
    
    ?>
</body>
</html>