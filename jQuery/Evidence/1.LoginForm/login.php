<?php

  $dbcon = new mysqli("localhost", "root", "", "jQuery_evidence");

  $email = $_POST['email'];
  $pass = sha1($_POST['pass']);

  $result = $dbcon->query("SELECT * FROM users WHERE email='$email' AND password='$pass'");
  if($result->num_rows==1){
    echo "<span class='text-success'>Login Successfully</span>";
  } else{
    echo "<span class='text-danger'>Invalid Login</span>";
  }

?>