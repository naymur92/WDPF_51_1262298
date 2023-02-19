<?php

    include_once("dbconfig.php");
    session_start();
    session_destroy();
    header("Location:index.php");

?>