<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="" method="post">
        <input type="text" name="uname" placeholder="Enter Username" value="<? if(isset($_POST['uname'])) echo $_POST['uname'];?>"><br>
        <input type="text" name="email" placeholder="Enter Email" value="<? if(isset($_POST['email'])) echo $_POST['email'];?>"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>


    <?php
    
        function formValidation(){
            $uname = $_POST['uname'];
            $email = $_POST['email'];

            //validation variable
            $userValid = 0;
            $emailValid = 0;

            //blank form alert
            if($uname == null && $email == null){
                echo "<h3>Please Enter Username and Email First.</h3>";
                return 0;
            }

            //Username validation
            if($uname == null){
                echo "<h3>Please Enter Username First.</h3>";
            } else if(strlen($uname)>8 || strlen($uname)<4){
                echo "<h3>Username must be 4 to 8 digit!</h3>";
            } else{
                $userValid = 1;
            }

            //Email validation
            if($email == null){
                echo "<h3>Please Enter Email First.</h3>";
            } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<h3>Email is invalid!</h3>";
            } else{
                $emailValid = 1;
            }


            //final validation
            if($userValid == 1 && $emailValid == 1){
                echo "<h3>You have successfully logged in.</h3>";
            }
        }


        //calling funcion
        if(isset($_POST['submit'])){
        formValidation();
        }
    
    ?>
</body>
</html>