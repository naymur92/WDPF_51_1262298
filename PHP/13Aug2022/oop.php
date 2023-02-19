<?php

    class Teacher {

    }

    class Student {
        private $name;
        public $age = 30;
        public $qualification;

        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
    }
    $st = new Student;
    if($st instanceof Teacher) echo "Yes. \n";
    else echo "No. \n";

    echo class_exists("Teacher") . "\n";
    echo get_class($st) . "\n";

    print_r(get_class_methods("Student"));
    print_r(get_class_vars("Student"));

?>