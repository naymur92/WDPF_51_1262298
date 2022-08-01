<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tred{
            color:red;
        }
        .tgreen{
            color:green;
        }
    </style>
</head>
<body>
    


    <?php
    
        $results = array(
            array("id" => 1, "Name" => "Student1", "MCQ" => 40, "Descriptive" => 37, "Evidence" => 30),
            array("id" => 2, "Name" => "Student2", "MCQ" => 28, "Descriptive" => 40, "Evidence" => 40),
            array("id" => 3, "Name" => "Student3", "MCQ" => 45, "Descriptive" => 39, "Evidence" => 45)
        );

        // echo "<pre>";
        // print_r($results);

        //creating table
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>MCQ+Descriptive</th>
                    <th>Evidence</th>
                    <th>Result</th>
                </tr>";

        foreach($results as $student){
            list($id, $name, $mcq, $des, $evd) = array_values($student);
            
            $total_mcq_des = $mcq+$des;
            echo "<tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$total_mcq_des</td>
                    <td>$evd</td>";

            if($total_mcq_des>=70 && $evd>=30){
                echo "<td class='tgreen'>Result= PASS</td>";
            } else{
                echo "<td class='tred'>Result= FAIL</td>";
            }

            echo "</tr>";
            
        }

        //closing table
        echo "</table>";
    
    ?>
</body>
</html>