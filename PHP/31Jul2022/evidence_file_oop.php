<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Check Result</h1>
    <form action="" method="post">
        <input type="text" name="id" placeholder="Enter Student ID">
        <input type="submit" name="submit" value="CHECK RESULT">
    </form>

    <?php
    
        //Class Creating
        class student{
            public $id;
            public $name;
            public $batch;

            public $result;
            public $lines;

            //constructor
            public function __construct()
            {
                $data = file('result.txt');
                $this->lines = $data;
            }

            public function find_result($student_id){
                foreach($this->lines as $line){
                    list($id, $name, $batch, $result) = explode(", ", $line);
                    if($id==$student_id){
                        echo "<h2>Student ID: {$id} </h2>";
                        echo "<h2>Student Name: {$name} </h2>";
                        echo "<h2>Student Batch: {$batch} </h2>";
                        echo "<h2>Student Result: {$result} </h2>";
                    }
                }
            }
        }

        if(isset($_POST['submit'])){
            $id = $_POST['id'];

            if($id==null){
                echo "<h2>Please Enter your ID first!</h2>";
            } else{
                $object1 = new student;
                $object1->find_result($id);
            }
        }
    
    ?>
</body>
</html>