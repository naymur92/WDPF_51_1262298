<?php

    class Employee {
        private $name;
        private $title;

        public function getName(){
            return $this->name;
        }
        public function getTitle(){
            return $this->title;
        }

        public function setName($name){
            $this->name = $name;
        }
        public function setTitle($title){
            $this->title = $title;
        }

        public function sayHello(){
            echo "Hi, my name is {$this->getName()} & I'm a {$this->getTitle()}.\n";
        }
    }

    $obj = new Employee();
    $obj->setName("Naymur");
    $obj->setTitle("Web Developer");
    // print_r($obj);
    $obj->sayHello();

?>