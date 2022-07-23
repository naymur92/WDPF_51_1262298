<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php
        echo "<pre>";
        // print_r($_GET);
        // print_r($_POST);
        print_r($_REQUEST);
        echo "</pre>";

        $email = $_POST['email'];
        $pass = $_POST['pswd'];

        echo "You wanted to login with your email {$email} and password {$pass}";
    ?> -->

    <h1>Login Form</h1>
    <form action="action.php" method="post">
        <input type="text" name="email" placeholder="Enter Email"><br>
        <input type="password" name="pswd" placeholder="Enter Password"><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>