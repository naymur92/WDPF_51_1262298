<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>EV2_Q2</title>
</head>
<body>
    <h3>Given Array Values</h3>

    <?php

    $countries = array(
        "Bangladesh" => "Dhaka",
        "India" => "Naya Dilhi",
        "Pakistan" => "Islamabad",
        "Nepal" => "Kathmundu",
        "Srilanka" => "Kolombo"
    );

    echo "<pre>";
    print_r($countries);
    echo "</pre>";

    asort($countries);
    // print_r($countries);

    ?>

    <div class="container">
        <h2>Sorted array values</h2>
        <table class="table">
            <tr>
                <th>Country Name</th>
                <th>Capital</th>
            </tr>
            <?php
                foreach($countries as $country => $capital){
            ?>
            <tr>
                <td><?= $country; ?></td>
                <td><?= $capital; ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>