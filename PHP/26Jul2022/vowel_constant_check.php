<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowel Constant Check</title>
    <style>
        .empty{
            color: red;
        }
        .vowel{
            color: green;
        }
        .constant{
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Vowel-Constant Check</h1>
    <form action="" method="POST">
        <input type="text" name="letter" placeholder="Enter a letter">
        <input type="submit" name="submit" value="CHECK">
    </form>

    <?php
        if(isset($_POST['submit'])){
            vowelConstant($_POST['letter']);
        }

        function vowelConstant($l){
            $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

            if($l == ""){
                echo "<h3 class='empty'>Please Enter a letter first!</h3>";
                return;
            }

            if(in_array($l, $vowels)){
                echo "<h3 class='vowel'>{$l} is vowel.</h3>";
            }
            else{
                echo "<h3 class='constant'>{$l} is constant.</h3>";
            }
        }
    ?>
</body>
</html>