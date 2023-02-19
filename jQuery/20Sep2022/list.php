<?php
  $good = array("Naymur", "Dipu", "Rabbany", "Alauddin", "Fayzullah");
  $bad = array("Bad 1", "Bad 2", "Bad 3", "Bad person 4", "Bad person 5", "Bad person 6");

  $get = $_GET['myChoice'];
  $data = $$get;  // convert selected string into variable and copy the data

  $output = "<ol>";
  foreach($data as $val) $output .= "<li>".$val."</li>";
  $output .= "</ol>";
  echo $output;
?>