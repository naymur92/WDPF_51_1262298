<?php
    $customers = array();
    $customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
    $customers[] = array("Jesse James", "jesse@example.com", "818-999-9999");
    $customers[] = array("Donald Duck", "donald@example.com", "212-999-9999");

    foreach($customers as $customer){
        vprintf("<p>Name: %s<br>E-mail: %s<br>Phone: %s</p>", $customer);
    }
?>