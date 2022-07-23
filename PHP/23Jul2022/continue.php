<?php
    echo "<pre>\n";

    $students = array("Dipu", "Naymur", "Anamul", "Rabbany", "Toky");

    // foreach($students as $student){
    //     if($student=="Anamul")continue;
    //     printf("%s is our student. \n",$student);
    // }

    for($i=0; $i<count($students); $i++){
        if($students[$i]=="Anamul")continue;
        printf("%s is our student. \n",$students[$i]);
    }
?>