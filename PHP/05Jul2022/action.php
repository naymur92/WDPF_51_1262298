<?php
        echo "<pre>";
        // print_r($_GET);
        // print_r($_POST);
        print_r($_REQUEST);
        
        // $email = $_POST['email'];
        // $pass = $_POST['pswd'];
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['pswd'];        
        
        echo "You wanted to login with your email {$email} and password {$pass}";
        
        print_r($GLOBALS);
        echo "</pre>";
    ?>