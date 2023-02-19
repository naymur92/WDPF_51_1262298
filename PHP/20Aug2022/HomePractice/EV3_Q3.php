<?php

    $results = array(
        array("ID" => 1, "Name" => "Student 1", "MCQ" => 40, "Descriptive" => 37, "Evidence" => 30),
        array("ID" => 2, "Name" => "Student 2", "MCQ" => 28, "Descriptive" => 40, "Evidence" => 40),
        array("ID" => 3, "Name" => "Student 3", "MCQ" => 45, "Descriptive" => 39, "Evidence" => 45)
    );

    foreach($results as $result){
        list($id, $name, $mcq, $des, $evd) = array_values($result);
        $total = $mcq + $des;

        echo "<h3>ID: $id</h3>";
        echo "<h3>Name: $name</h3>";
        echo "<h3>Total Score (MCQ+Descriptive): $total</h3>";

        if($total >= 70 && $evd >=30) echo "<h3>Result: PASS</h3>";
        else echo "<h3>Result: FAIL</h3>";
        
        echo "<br>";
    }

?>