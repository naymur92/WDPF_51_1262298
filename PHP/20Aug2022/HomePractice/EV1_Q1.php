<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EV1_Q1</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter your username"><br>
        <input type="text" name="email" placeholder="Enter a valid email"><br>
        <input type="submit" name="submit" value="Registration">
    </form>

    <?php
    
        function validateForm(){
            extract($_POST);
            $validUser = 0;
            $validEmail = 0;

            if($user == null && $email == null){
                echo "<h3>Fill the form first!</h3>";
                return false;
            }

            if($user == null){
                echo "<h3>Enter your username first!</h3>";
            } else if(!preg_match_all("/[A-Za-z0-9._%+-]{4,8}/", $user)){
                echo "<h3>Username must be 4 to 8 character.</h3>";
            } else $validUser = 1;

            if($email == null){
                echo "<h3>Enter your email first!</h3>";
            } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<h3>Invalid Email</h3>";
            } else $validEmail = 1;

            if($validUser == 1 && $validEmail == 1)
                echo "<h3>All data are validated!!!!</h3>";
        }

        if(isset($_POST['submit'])) validateForm();
    
    ?>
</body>
</html>