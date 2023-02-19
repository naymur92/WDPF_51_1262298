<?php
//first set display_errors=Off in php.ini file

    // try {
    //     $fh = fopen("contacts.txt", "r");
    //     if (! $fh) {
    //         throw new Exception("Could not open the file!");
    //     }
    // } catch (Exception $e) {
    //     // echo "Error (File: ".$e->getFile().", line ".$e->getLine()."): ".$e->getMessage();

    //     echo $e->getMessage();
    // }

?>

<?php

try {
    $fh = require("contacts.txt");
    if (! $fh) {
        throw new Exception("Could not open the file!");
    }
} catch (Throwable $t) {
    echo $t->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "Hello, This shows that PHP working fine after fatal error";
?>