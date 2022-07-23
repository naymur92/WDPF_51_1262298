<?php
    // $colors = ["red", "green", "blue"];
    // list($color1, $color2, $color3) = $colors;
    // echo $color1. "\n";


    function retriveUserProfile(){
        $user[] = "Jason Gilmore";
        $user[] = "jason@example.com";
        $user[] = "English";
        return $user;
    }
    list($name, $email, $language) = retriveUserProfile();
    echo "Name: {$name}, email: {$email}, language: {$language}";
    echo "\n";
?>