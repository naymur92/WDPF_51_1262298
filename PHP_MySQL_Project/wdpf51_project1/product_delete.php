<?php

  include("includes/dbcon.php");
    $pid = $_GET['pid'];

    $dbcon->query("DELETE FROM products WHERE pid=$pid");

    if($dbcon->affected_rows>0){
        header("Location:products.php");
    }

?>