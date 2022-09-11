<?php
  if(isset($_POST['password-reset-token']) && $_POST['email'])
  {
    include "db.php";
    $result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
    $row= mysqli_num_rows($result);
    if($row < 1)
    {
      $token = md5($_POST['email']).rand(10,9999);
      mysqli_query($conn, "INSERT INTO users(name, email, email_verification_link ,password) VALUES('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $token . "', '" . md5($_POST['password']) . "')");
      $link = "<a href='localhost/WDPF_51_1262298/PHP&MySQL/11Sep2022/EmailVerification/verify-email.php?key=".$_POST['email']."&token=".$token."'>Click and Verify Email</a>";

      // require_once('phpmail/PHPMailerAutoload.php');
      require_once("../../../phpmailerEmailVerify.php");
    }
  }
?>