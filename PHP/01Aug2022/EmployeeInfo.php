<?php

    $id = $_POST['id'];
    $name = $_POST['name'];
    $desig = $_POST['desig'];
    $basic = $_POST['basic'];
    $rent = $_POST['rent'];
    $transport = $_POST['transport'];

    $total = $basic + $rent + $transport;

    echo "<h3>Employee ID: $id </h3>";
    echo "<h3>Employee Name: $name </h3>";
    echo "<h3>Total Salary: $total </h3>";

?>