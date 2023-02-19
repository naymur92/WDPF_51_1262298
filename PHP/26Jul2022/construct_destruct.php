<?php
    class oop {
        private $name;
        ///construct and destruct function always auto call.
        public function __construct($n){
            $this->name = $n;
            echo $this->name . ". Yes, I am here.\n";
        }

        public function sayHello(){
            echo "Hello World.\n";
        }

        public function __destruct()
        {
            echo "OOP Object says bye bye!\n";
        }
    }

    // new oop;
    $ob = new oop("Naymur");
    $ob->sayHello();
?>