<?php

    //class creation

use student as GlobalStudent;

    class student{
        public $id;
        public $name;
        public $batch;

        public $result;
        public $lines;

        public function __construct()
        {
            $data = file('result.txt');
            $this->lines = $data;
        }

        public function result($student_id){
            foreach($this->lines as $line){
                list($id, $name, $batch, $result) = explode(", ", $line);
                if($id==$student_id){
                    echo "<h3>Student ID: {$id} <br>";
                    echo "<h3>Student Name: {$name} <br>";
                    echo "<h3>Student Batch: {$batch} <br>";
                    echo "<h3>Student Result: {$result} <br>";
                }
            }
        }
    }

    $checkResult = new student;
    echo $checkResult->result(2);

?>