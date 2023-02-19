<?php

    //Read the file
    $users = file('users.txt');

    //Headings
    echo "<h2>Click Those button to emailing</h2>";

    //Cycle through the array
    foreach ($users as $user) {
        //Parse the line, retriving the name and e-mail address
        list($name, $email) = explode(' ', $user);

        //remove new line from email
        $email = trim($email);

        //Output the formatted name and e-mail address
        echo "<a href='mailto:$email'>$name</a> <br>";

    }

?>