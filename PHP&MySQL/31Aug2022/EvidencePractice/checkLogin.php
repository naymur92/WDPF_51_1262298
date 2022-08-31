<?php

    $db = new mysqli("localhost", "root", "", "Company");

    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = "SELECT * FROM user WHERE username='$user' AND password='$pass'";
        $result = $db->query($sql);
        $data = $result->fetch_assoc();

        if($result->num_rows != 1){
            header("Location:1_login.php?msg=error");
        } else{
            session_start();
            $_SESSION['uname'] = $data['username'];
            header("Location:1_dashboard.php");
        }
    }

?>