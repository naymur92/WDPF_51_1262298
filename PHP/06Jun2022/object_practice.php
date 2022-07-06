<?php
    class Student{
        public $course;
        public $batch;

        public function setDetails($course1, $batch1){
            $this->course = $course1;
            $this->batch = $batch1;
        }
    }

    $naymur = new Student();
    $naymur->setDetails("WDPF", 51);

    echo "<pre>";
    // var_dump($naymur);
    print_r($naymur);

    echo "</pre>";
    echo $naymur->batch;
    echo "<br>";
    echo $naymur->course;

?>