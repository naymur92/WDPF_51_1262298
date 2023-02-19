<?php

    class Employee
    {
        public $name;
        public function __set($propName, $propValue)
        {
            $this->$propName = $propValue;
        }
    }
    $employee = new Employee;
    $employee->name = "Mario";
    $employee->title = "Executive Chef";
    echo "Name: {$employee->name}<br />";
    echo "Title: {$employee->title}";

?>