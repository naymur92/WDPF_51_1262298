<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tgreen {
            color: green;
        }

        .tred {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Result Form</h1>
    <form action="" method="post">
        <input type="text" name="id" placeholder="Enter your ID">
        <input type="submit" name="submit" value="SEARCH">
    </form>

    <?php

    //Class creation
    class student
    {
        //fields
        public $id;
        public $name;
        public $batch;

        public $result;
        public $lines;

        //constructor
        public function __construct()
        {
            $data = file('results.txt');
            $this->lines = $data;
        }

        //method
        public function result($sid)
        {
            foreach ($this->lines as $line) {
                list($id, $name, $batch, $result) = explode(", ", $line);
                if ($id == $sid) {
                    echo "<h2>ID: $id </h2>";
                    echo "<h1>Student name= $name </h1>";
                    echo "<h4>Batch= $batch </h4>";
                    if (trim($result) == "Pass") {
                        echo "<h3 class='tgreen'>Student result= $result </h3>";
                    }
                    if (trim($result) == "Fail") {
                        echo "<h3 class='tred'>Student result= $result </h3>";
                    }
                }
            }
        }
    }

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];

        //object creation
        $st1 = new student;

        if ($id == "") {
            echo "<h3 class='tred'>Enter an ID first!</h3>";
        } else {
            $st1->result($id);
        }
    }


    ?>
</body>

</html>