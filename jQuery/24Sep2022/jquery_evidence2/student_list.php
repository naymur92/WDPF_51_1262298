<?php
include "dbconfig.php";

$batch_id = $_GET['batch_id'];
?>

<option value="" selected disabled>Select One</option>
<?php
$result = $db->query("SELECT * FROM students WHERE st_batch_id=$batch_id");
while ($row = $result->fetch_assoc()) {
?>
  <option value="<?= $row['student_id'] ?>"><?= $row['student_name'] ?></option>
<?php } ?>