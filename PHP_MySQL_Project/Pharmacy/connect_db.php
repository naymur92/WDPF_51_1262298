<?php
error_reporting (1);
$con = mysqli_connect('localhost','root','')or die("cannot connect to server");
mysqli_select_db($con, 'pharmacy')or die("cannot connect to database");

?>