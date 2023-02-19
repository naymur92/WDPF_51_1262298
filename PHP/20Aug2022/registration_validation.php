<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Put your name"><br><br>
        <input type="text" name="email" placeholder="Put your email"><br><br>
        <input type="password" name="pass1" placeholder="Type new password"><br><br>
        <input type="password" name="pass2" placeholder="Retype password"><br><br>
        <input type="submit" name="submit" value="Registration">
    </form>

    <?php        
        function checkForm(){
            extract($_POST);
            $emailValid = 0;
            $validPass = 0;
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<h3>Enter Valid Email</h3>";
            } else $emailValid = 1;

            $pattern = "/[A-z0-9._%+-]{4,8}/";
            if($pass1 != $pass2){
                echo "<h3>Password Does not match</h3>";
            } else if(!preg_match_all("$pattern", $pass1) && !preg_match_all("$pattern", $pass2)){
                echo "<h3>Password Length must be 4 to 8</h3>";
            } else $validPass = 1;

            if($validPass==1 && $emailValid==1){
                echo "<h3>All Data are Validated</h3>";
            }
        }

        if(isset($_POST['submit'])){
            extract($_POST);
            if($name == null || $email == null || $pass1 == null || $pass2 == null){
                echo "<h3>Fill the form first</h3>";
            } else checkForm();
        }    
        
    
    ?>
</body>
</html>