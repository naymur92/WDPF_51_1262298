<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 400px;
            border-collapse: collapse;
        }
        table, tr, th, td{
            border: 1px solid black;            
        }
    </style>
</head>
<body>
    

    <?php
        //Creating array
        $countries = array(
            "Bangladesh" => "Dhaka",
            "India" => "Naya Dilli",
            "Pakistan" => "Islamabad",
            "Nepal" => "Kathmundu",
            "Thiland" => "Bankok"
        );

        //Sorting array
        asort($countries);

        //creating table
        echo "<table>
                <tr>
                    <th>SL No.</th>
                    <th>Country Name</th>
                    <th>Capital</th>
                </tr>";

        $sr = 1;

        //printing data into table
        foreach($countries as $country => $capital){
            echo "<tr>
                    <td>$sr</td>
                    <td>$country</td>
                    <td>$capital</td>
                </tr>";
            $sr ++;
        }

        //Table closing
        echo "</table>";
    ?>
</body>
</html>