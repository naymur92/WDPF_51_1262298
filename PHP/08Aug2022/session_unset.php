<?php

    session_start();

    print_r($_SESSION);

    // $_SESSION['name'] = "Dipu";
    // $_SESSION['age'] = 26;

    // unset($_SESSION['age']);

    session_destroy();

?>