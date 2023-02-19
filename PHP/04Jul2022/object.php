<?php
    class Appliance{
        public $age;
        public $name;

        public function setDetails($age, $name){
            $this->age = $age;
            $this->name = $name;
        }
    }

    $fridge = new Appliance();
    $fridge->setDetails(10, "Singer");
    // print_r($fridge);
    var_dump($fridge);

    echo "<br>";

    $tv = new Appliance();
    $tv->setDetails(15, "Samsung");
    echo $tv->age;
    echo "<br>";
    print_r($tv);
?>