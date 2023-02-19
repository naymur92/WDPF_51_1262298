<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        .empty{
            color:brown;
        }
        .invalid{
            color: red;
        }
        .validated{
            color:green;
        }
    </style>
</head>
<body>
    <h2>Login Form</h2>
    <form action="" method="post">
        <input type="text" name="login" placeholder="Enter Login Name" value="<?php if (isset($login)) echo $login; ?>"><br>
        <input type="text" name="email" placeholder="Enter E-mail" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"><br>
        <input type="submit" name="submit" value="LOGIN">
    </form>

    <?php
    //Calling Function
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $login = $_POST['login'];
        $email = $_POST['email'];

        $errors = array();
        if($login == ""){
            $errors[] = "Login must be filled up.";
        }
        if($email == ""){
            $errors[] = "Email must be filled up.";
        }
        
        //Checking Login Name
        if (strlen($login) > 8 || strlen($login) < 4) {
            $errors[] = "Login must be 4 to 8";
        }

        //Checking Email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Valid E-mail must";
        }

        //Success Output
        if(count($errors)>0){
            foreach($errors as $err){
                echo "$err <br>";
            }
        }
        else{
            echo "successfully logged in";
        }
    }
      
    ?>
</body>
</html>