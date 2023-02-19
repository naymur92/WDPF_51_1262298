<?php

    session_start();
    // echo session_id()."<br>";
    echo "<pre>";

    $_SESSION['name'] = "Dipu";
    $_SESSION['age'] = 26;
    
    print_r($_SESSION);

    // unset($_SESSION['age']);

    // session_destroy();

?>