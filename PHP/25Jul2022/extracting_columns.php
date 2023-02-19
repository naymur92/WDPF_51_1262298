<?php
    $customers = array();
    $customers[] = array("name" => "Jason Gilmore", "email" => "jason@example.com", "phone" => "614-999-9999");
    $customers[] = array("name" => "Jesse James", "email" => "jesse@example.com", "phone" => "818-999-9999");
    $customers[] = array("name" => "Donald Duck", "email" => "donald@example.com", "phone" => "212-999-9999");

    $names = array_column($customers , 'name');

    print_r($names);
?>