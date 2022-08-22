<?php
    include_once("dbconfig.php");

    $id = $_GET['id'];
    $db->query("DELETE FROM products WHERE product_id=$id");

    if($db->affected_rows >0){
        header("Location:productList.php"); // Return to productList page
    }
?>