<?php $db = new mysqli("localhost", "root", "", "Company") ?>

<?php

    session_start();
    session_destroy();
    header("Location:1_login.php");

?>