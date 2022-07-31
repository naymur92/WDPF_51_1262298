<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <style>
        .text-red{
            color: red;
        }
        .text-green{
            color: green;
        }
    </style>
</head>
<body>
    <h1>Find Result</h1>
    <form action="" method="post">
        <input type="text" name="id" placeholder="Enter your ID here">
        <input type="submit" name="submit" value="CHECK RESULT">
    </form>

    <?php
    
        class student{
            private $id;
            private $name;
            private $batch;
            private $result;
            private $lines;

            public function __construct()
            {
                $data = file('result.txt');
                $this->lines = $data;
            }

            public function findResult($sid){
                foreach($this->lines as $line){
                    list($id, $name, $batch, $result) = explode(", ", $line);
                    if($id==$sid){
                        echo "<h3>Student ID: {$id}</h3>";
                        echo "<h3>Student Name: {$name}</h3>";
                        echo "<h3>Student Batch: {$batch}</h3>";

                        if(trim($result)=="Fail"){
                            echo "<h3 class='text-red'>Student Result: {$result}</h3>";
                        } else if(trim($result)=="Pass"){
                            echo "<h3 class='text-green'>Student Result: {$result}</h3>";                            
                        }
                    }
                }
            }
        }

        if(isset($_POST['submit'])){
            $id = $_POST['id'];

            if($id==null){
                echo "<h3 class='text-red'>Please Enter your ID first!</h3>";
            } else{
                $obj_student = new student;
                $obj_student->findResult($id);
            }
        }
    
    ?>
</body>
</html>