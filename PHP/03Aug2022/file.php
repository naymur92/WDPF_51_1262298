<?php

    $file = "name&email.txt";

    $data = file($file);

    echo "<pre>";
    // print_r($data);
    // echo "<table border='1'>
    //         <tr>
    //             <th>Name</th>
    //             <th>E-mail</th>
    //         </tr>";

    foreach($data as $dat){
        // echo $dat. "<br>";
        list($name, $email) = explode(" ", $dat);
        echo "<a href='mailto:$email'>$name</a><br>";

        // echo "<tr>
        //         <td>$name</td>
        //         <td>$email</td>
        //     </tr>";

    }

    // echo "</table>";

?>