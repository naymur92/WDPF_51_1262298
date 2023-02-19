<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        public function __construct()
        {
            $data = file('result.txt');
            $this->lines = $data;
        }

        public function result($id){
            foreach($this->lines as $line){
                list($std_id, $name, $batch, $result) = explode(",", $line);
                if($std_id == $id){
                    echo "Student ID: $std_id <br>";
                    echo "Student Name: $name <br>";
                    echo "Student Batch: $batch <br>";
                    echo "Student Result: $result <br>";
                }
            }
        }
        
    }

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        
        $obj = new student;
        $obj->result($id);
    }

?>
</body>
</html>