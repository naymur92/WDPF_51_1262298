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
        <input type="text" name="uname" placeholder="Enter username"><br>
        <input type="text" name="email" placeholder="Enter Email"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>

    <?php
    
        function validateLogin(){
            $uname = $_POST['uname'];
            $email = $_POST['email'];
            $validUser = 0;
            $validEmail = 0;

            if($uname == null && $email == null){
                echo "Please Enter Login name and Email.";
                return 0;
            }

            if($uname == null){
                echo "Please Enter User Name.";
            } else if(strlen($uname)>8 || strlen($uname)<4){
                echo "Username must be 4 to 8 charecter.";
            } else{
                $validUser = 1;
            }

            if($email == null){
                echo "Please Enter E-mail first.";
            } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Please Enter valid email";
            } else{
                $validEmail = 1;
            }


            if($validUser == 1 && $validEmail == 1){
                echo "All data are validated";
            }
        }

        if(isset($_POST['submit'])){
            validateLogin();
        }
    
    ?>
</body>
</html>