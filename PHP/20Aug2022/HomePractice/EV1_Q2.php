<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EV1_Q2</title>
</head>
<body>
    <h2>Result Checking</h2>
    <form action="" method="post">
        <input type="text" name="id" placeholder="Enter your id"><br>
        <input type="submit" name="submit" value="CHECK RESULT">
    </form>

    <?php
        class student{
            private $id;
            private $name;
            private $result;
            private $line;

            public function __construct()
            {
                $this->line = file("result.txt");
            }

            public function checkResult($sid){
                foreach($this->line as $res){
                    list($id, $name, $batch, $result) = explode(" ", $res);
                    if($id == $sid){
                        echo "<h3>ID: $id</h3>";
                        echo "<h3>Name: $name</h3>";
                        echo "<h3>Batch: $batch</h3>";
                        echo "<h3>Result: $result</h3>";
                    }
                }
            }
        }

        extract($_POST);
        if(isset($submit)){
            if($id == null){
                echo "<h3>Enter your id first!</h3>";
            } else{
                $obj = new student;
                $obj -> checkResult($id);
            }
        }
    ?>
</body>
</html>