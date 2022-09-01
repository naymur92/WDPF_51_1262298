<?php $db = new mysqli("localhost", "root", "", "Company") ?>

<?php

    extract($_POST);
    // echo $user;
    // echo $pass;
    $sql = "SELECT * FROM user WHERE username='$user' AND password='$pass'";
    $result = $db->query($sql);
    // print_r($result);
    if($result->num_rows != 1){
        header("Location:1_login.php?msg=error");
    } else{
        $data = $result->fetch_assoc();
        session_start();
        $_SESSION['uname'] = $data['username'];
        header("Location:1_dashboard.php");
    }

?>