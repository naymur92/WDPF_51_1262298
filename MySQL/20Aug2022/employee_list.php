<?php include_once("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class='table table-responsive'>
            <tr>
                <th>employeeNumber</th>
                <th>Full Name</th>
                <th>email</th>
            </tr>

        <?php        
            $sql = "SELECT * FROM employees";
            $result = $db -> query($sql);
            // echo "<pre>";
            // print_r($result);

            while($data = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?= $data['employeeNumber']; ?></td>
            <td><?= "{$data['firstName']} {$data['lastName']}"; ?></td>
            <td><?= $data['email']; ?></td>
        </tr>
        <?php
            }
            // print_r($data);        
        ?>

        </table>
    </div>
</body>
</html>