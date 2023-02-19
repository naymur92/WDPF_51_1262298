<?php
    echo "<h1>Output using printf()</h1>";

    printf("Price of Mango is %d Tk. per KG.", 110);
    //Here %d is type Specifire
    echo "<br>";

    printf("My weight is %f KG.", 62.5);

    echo "<h3>We have to use percision specifire to limit digit after decimal point</h3>";
    printf("My weight is %0.2f KG.", 62.5);
    echo "<br>";


    echo "<h2>Another exammple (Juggling)</h2>";
    printf("We are students of IsDB-BISEW %d Batch", "51Batch");
?>