<?php

    function my_autoloader($class){
        include "classes/". $class . ".class.php";
    }
    spl_autoload_register('my_autoloader');
    $obj = new Events;
    $obj->name = "Get Together";
    // echo get_class($obj) . "\n";
    print_r($obj);


    // echo "<pre>";
    // echo phpinfo();

?>