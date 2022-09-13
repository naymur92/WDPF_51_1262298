<?php
  $db = new mysqli("localhost", "root", "", "wdpf51");
  $id = $_GET['id'];
  $sql = "SELECT * FROM students WHERE student_batch=$id";
  $result = $db->query($sql);
  if($result->num_rows>0){
?>
  <table class="table">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Batch</th>
    </tr>
    <?php
  while($row = $result->fetch_assoc()){
    ?>
  <tr>
    <td><?= $row['student_id']; ?></td>
    <td><?= $row['student_name']; ?></td>
    <td><?= $row['student_email']; ?></td>
    <td><?= $row['student_phone']; ?></td>
    <td><?= $row['student_batch']; ?></td>
  </tr>
  <?php
  }
  ?>
  </table>
  <?php
  } else{
    echo "<h4 class='text-danger'>No record found!</h4>";
  }
  ?>