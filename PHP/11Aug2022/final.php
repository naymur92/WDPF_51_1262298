<?php
class Fruit {
  final public function intro() {
    echo "I am intro class";
  }
}

class Strawberry extends Fruit {
  // will result in error
  public function intro() {
    echo "I am intro from child";

  }
}

$obj = new Strawberry;
$obj->intro();

?>