<?php include_once("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sql = "SELECT * FROM employees";
        $result = $db -> query($sql);

        $data = $result -> fetch_assoc();
        echo "<pre>";
        print_r($data);
    ?>
</body>
</html>