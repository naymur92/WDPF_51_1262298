<?php
    //Creating Class
    class Employee{
        private $title;
        private $name;
        public const AGE = 30;

        public function getName(){
            return $this->name;
        }

        public function setName($name1){
            $this->name = $name1;
        }

        public function sayHello(){
            $msg = "Hi {$this->getName()}, welcome to OOP.";
            // $msg .= SELF::AGE;
            echo $msg;
        }
        public static function welcome(){
            $age = self::AGE;
            echo $age;
        }
    }

    echo "<pre>";
    //creating object
    $obj1 = new Employee;
    // echo Employee::AGE;
    $obj1->setName("Naymur");
    $obj1->sayHello();
    echo "\n";

    // $obj1->welcome();
    Employee::welcome();

    echo "<hr>\n";
    print_r($obj1);
?>