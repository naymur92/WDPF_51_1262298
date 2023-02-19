<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowel Constant Finder</title>

    <style>
        .container{
            width: 500px;
            height: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: lightgreen;
            border-radius: 10px;
        }
        input[type='text']{
            padding: 5px;
            border-radius: 4px;
            outline: 0;
        }
        input[type='submit']{
            padding: 8px;
            background-color: pink;
            border: 0;
            border-radius: 4px;
        }
        h1{border-bottom: 2px solid black;}
        .caution{
            color: red;
        }
        .vowel{
            color: green;
        }
        .consonant{
            color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Vowel-Consonant Finder</h1>

        <form action="" method="post">
            <input type="text" name="letter" placeholder="Enter a letter">
            <input type="submit" name="submit" value="CHECK">
        </form>

        <?php
            if(isset($_POST['submit'])){
                vowelConsonant($_POST['letter']);
            }

            function vowelConsonant($letter){
                $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

                if($letter==""){
                    echo "<h3 class='caution'>Please enter a letter.</h3>";
                    return;
                }

                if(in_array($letter, $vowels)){
                    echo "<h3 class='vowel'>{$letter} is vowel.</h3>";
                }
                else{
                    echo "<h3 class='consonant'>{$letter} is consonant.</h3>";
                }
            }
        ?>
    </div>    
</body>
</html>