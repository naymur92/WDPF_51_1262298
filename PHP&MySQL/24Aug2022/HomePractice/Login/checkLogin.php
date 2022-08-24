<?php
    include_once("dbconfig.php");

    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $pass = sha1($_POST['pass']);
    
        $result = $db->query("SELECT * FROM users WHERE email='$email' AND password='$pass'");
        // echo $db->affected_rows;
        if($db->affected_rows != 1){
            $msg = "There was a problem in email and password!";
            // session_start();
            header("Location:login.php?m=$msg");
        } else{
            session_start();
            $data = $result->fetch_assoc();
            $_SESSION['name'] = $data['name'];
            // header("Location:login.php");
        }
    }
?>