<?php

use Employee as GlobalEmployee;

    class Employee {
        protected $wage;

        public function setWage($wage) {
            $this->wage = $wage;
        }
    }
    // Child class
    class Programmer extends Employee {
        public function bonus($percent){
            echo "Bonus = " . $this->wage *$percent / 100 . "\n";
        }
    }

    // $obj1 = new Employee;
    // print_r($obj1);
    $obj2 = new Programmer;
    $obj2 -> setWage(20000);
    $obj2 -> bonus(6);

?>