<?php

    abstract class AbstractClass{
        abstract protected function getName($name);
    }

    class childClass extends AbstractClass{
        public function getName($name)
        {
            return "Hi, I'm ". $name . "!";
        }
    }
    $obj = new childClass;
    echo $obj -> getName("Naymur");

?>