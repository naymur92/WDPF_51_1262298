<?php
    $db = new mysqli("localhost", "root", "", "wdpf51");
    $id = $_GET['id'];

    $db->query("DELETE FROM students WHERE student_id=$id");
    if($db -> affected_rows > 0){
        header("Location:index.php");
    }
?>
