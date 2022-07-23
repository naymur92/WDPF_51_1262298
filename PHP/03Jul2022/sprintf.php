<?php
    echo "<p>sprintf cannot output data.</p>";
    echo "<p>to show data we have to store output into a variable.</p>";

    $output = sprintf("My Computers CPU model Intel Core i%d.", 5);

    print $output;
?>