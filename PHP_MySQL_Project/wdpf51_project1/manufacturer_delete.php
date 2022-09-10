<?php

  include("includes/dbcon.php");
    $mid = $_GET['mid'];

    $dbcon->query("DELETE FROM manufacturer WHERE m_id=$mid");

    if($dbcon->affected_rows>0){
        header("Location:manufacturers.php");
    }

?>