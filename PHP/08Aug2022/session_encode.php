<?php
    // Initiate session and create a few session variables
    session_start();

    // Set a few session variables.
    $_SESSION['username'] = "Naymur";
    $_SESSION['age'] = 30;
    $_SESSION['loggedon'] = date("d-m-Y h:i:s A");

    // session_destroy();

    // Encode all session data into a single string and return the result
    $sessionVars = session_encode();
    echo $sessionVars;

    // session_unset();

    // print_r($_SESSION);
?>