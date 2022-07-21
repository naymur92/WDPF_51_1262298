<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $guess = 120;

        if($_POST['mynum']==$guess){
            echo "Congratulations!";
        }
        else if(abs($_POST['mynum']-$guess)<10){
            echo "You are getting close.";
        }
        else if(abs($_POST['mynum']-$guess)<10){
            echo "You are getting close.";
        }
        else {
            echo "Sorry";
        }
    }

    
    ?>

    <h1>Guess the number</h1>
    <form action="" method="post">
        <input type="text" name="mynum" placeholder="Guess a number">
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>