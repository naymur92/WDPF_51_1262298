<?php
    $db = new mysqli("localhost", "root", "", "students");

    $id = $_GET['id'];
    $db->query("DELETE FROM students WHERE student_id=$id");
    if($db->affected_rows > 0){
        header("Location:studentList.php");
    }

?>