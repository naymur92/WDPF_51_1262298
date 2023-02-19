<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug  = 2;                  //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.mail.yahoo.com';                   //Set the SMTP server to send through
                            //smtp.mail.yahoo.com
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'naymur92@yahoo.com';                   //SMTP username
                            //naymur92@yahoo.com
        $mail->Password   = '';                     //SMTP password
                            // omiinkbfagloqgcs
        $mail->SMTPSecure = 'tls';              //Enable implicit TLS encryption
        $mail->Port       = 587;                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('naymur92@yahoo.com');   //Sender
        $mail->addAddress($_POST['email']);     //Add a recipient

        //Content
        $mail->isHTML(true);                    //Set email format to HTML
        $mail->Subject = "{$_POST['subject']}";
        $mail->Body    = "{$_POST['message']}";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>