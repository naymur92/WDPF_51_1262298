<?php

  $dbcon = new mysqli('localhost', 'root', '', 'jquery_evidence');

  $div_id = $_POST['division'];

  echo "<option selected disabled>Select One</option>";

  $result = $dbcon->query("SELECT * FROM districts WHERE division_id='$div_id'");
  while($row = $result->fetch_assoc()){
    echo "<option value='{$row['id']}'>{$row['district_name']}</option>";
  }

?>