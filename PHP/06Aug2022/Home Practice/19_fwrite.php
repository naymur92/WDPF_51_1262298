<?php

    //Data we'd like to write to the subscribers.txt file
    $subscriberInfo = 'Jason Gilmore|Jason@example.com';

    //Open subscribers.txt for writing
    $fh = fopen('write.txt', 'a');

    //write the data
    fwrite($fh, $subscriberInfo);

    //Close the handle
    fclose($fh);

?>