<?php
    include_once('dbconfig.php');

    $email = $_POST['email'];
    $pass = sha1($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";

    $result = $db->query($sql);
    if($result->num_rows != 1){
        $msg = "Email or Password may be wrong";
        // session_start();
        header("Location:index.php?m=$msg");
    } else{
        session_start();
        $_SESSION['email'] = $email;
        header("Location:dashboard.php");
    }
?>