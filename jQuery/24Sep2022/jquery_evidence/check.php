<?php
  include "dbconfig.php";

  if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    $email = $_GET['email'];
    $password = SHA1($_GET['password']);
    
    $result = $db->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
  
    if($result->num_rows == 1){
      echo "<span class='bg-success p-2 text-white'>Valid User</span>";
    } else{    
      echo "<span class='bg-danger p-2 text-white'>Invalid User</span>";
    }
  }

?>