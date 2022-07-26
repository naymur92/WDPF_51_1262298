<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="" method="post">
        <input type="text" name="login" placeholder="Enter Login Name"><br>
        <input type="text" name="email" placeholder="Enter E-mail"><br>
        <input type="submit" name="submit" value="LOGIN">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $login = $_POST['login'];
            $email = $_POST['email'];

            if(strlen($login)>8 || strlen($login)<4){
                echo "Invalid Login";
            }
            else{
                echo "Valid Login";
            }

            echo "<br>";
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Valid Email";
            }
            else{
                echo "Invalid Email";
            }
        }
    ?>
</body>
</html>