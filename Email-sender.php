<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Email Sender</h2>
    <form action="" method="post">
        To: <br>
        <input type="text" name="email" placeholder="Enter Receiver Email"><br><br>
        <!-- <input type="text" name="name" placeholder="Enter your Name"><br><br> -->
        Subject: <br>
        <input type="text" name="subject" placeholder="Enter Subject"><br><br>
        Email Body: <br>
        <textarea name="message" cols="30" rows="10" placeholder="Enter your message"></textarea><br>
        <input type="submit" name="submit" value="SEND">
    </form>   

    <?php

        if(isset($_POST['submit'])){
            include "phpmailer.php";

        }

    ?>

</body>
</html>