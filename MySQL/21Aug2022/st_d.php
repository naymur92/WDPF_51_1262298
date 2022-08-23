<?php
    $db = new mysqli("localhost", "root", "", "students");

    // $id = $_GET['id'];
    $db->query("UPDATE students SET student_id=2222, student_name='Maruf Ahmed', student_phone=111111 WHERE student_id=3");
    if($db->affected_rows > 0){
        echo "success";
    }

?>