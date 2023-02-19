<?php
    $email1 = "admin@example.com";
    $email2 = "ADMIN@example.com";

    // echo strcasecmp($email1, $email2) . "\n";

    if (! strcasecmp($email1, $email2))
    echo "The email addresses are identical!";
?>