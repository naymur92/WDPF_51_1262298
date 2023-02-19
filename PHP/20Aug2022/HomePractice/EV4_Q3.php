<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EV4_Q3</title>
</head>
<body>
    <h1>Login Form</h1>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter email"><br>
        <input type="password" name="pass" placeholder="Enter password"><br><br>
        <input type="submit" name="submit" value="LOGIN">
    </form>


    <?php
        extract($_POST);
        $validEmail = 0;
        $validPass = 0;

        if(isset($submit)){
            if($email == null && $pass == null){
                echo "<h3>Enter Email & Password first!!!</h3>";
            } else{
                if($email == null){
                    echo "<h3>Enter Email!</h3>";
                } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "<h3>Invalid email format!</h3>";
                } else $validEmail = 1;

                if($pass == null){
                    echo "<h3>Enter Password!</h3>";
                } else if(!preg_match_all("/[A-Za-z0-9._%+-]{4,8}/", $pass)){
                    echo "<h3>Password must be 4-8 character length!</h3>";
                } else $validPass = 1;

                if($validEmail == 1 && $validPass == 1){
                    echo "<h3>All data are valid</h3>";
                }
            }
        }
        
    ?>
</body>
</html>