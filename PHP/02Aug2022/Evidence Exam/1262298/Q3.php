<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q3</title>
    <style>
        .text-red{
            color: red;
        }
        .text-green{
            color:green;
        }
    </style>
</head>
<body>
    
    <h1>Student Result Form</h1>
    <form action="" method="post">

        <input type="text" name="id" placeholder="Enter student ID">
        <input type="submit" name="submit" value="SHOW RESULT">
    </form>


    <?php

        class student{
            private $std_id;
            private $name;
            private $batch;

            private $lines;

        //Create construct
            public function __construct()
            {
                $data = file('result.txt');
                $this->lines = $data;
            }

        //creating method
            public function result($id){
                foreach($this->lines as $line){
                    list($std_id, $name, $batch, $result) = explode(",", $line);
                    if($std_id == $id){
                        echo "<h3>Student ID: $std_id </h3>";
                        echo "<h3>Student Name: $name </h3>";
                        echo "<h3>Student Batch: $batch </h3>";
                        if(trim($result) == "Pass"){
                            echo "<h3 class='text-green'>Student Result: $result </h3>";
                        } else if(trim($result) == "Fail"){
                            echo "<h3 class='text-red'>Student Result: $result </h3>";
                        }
                    }
                }
            }
            
        }

        //object creation
        $obj = new student;

        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            
            if($id == null){
                echo "<h3 class='text-red'>Enter your ID first!</h3>";
            } else{
                $obj->result($id); //calling method
            }            
        }

    ?>
</body>
</html>