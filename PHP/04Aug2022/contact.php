<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Contact with us</h2>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter your Email"><br>
        <input type="text" name="name" placeholder="Enter your Name"><br>
        <input type="text" name="subject" placeholder="Enter Subject"><br>
        <textarea name="message" cols="30" rows="10" placeholder="Enter your message"></textarea>
        <input type="submit" name="submit" value="SEND">
    </form>
    <?php
        extract($_POST);
        $to = "naymur92@gmail.com";
        if(mail($to, $email, $subject, $message)){
            echo "Sent Successfully";
        }

           
    ?>
</body>
</html>