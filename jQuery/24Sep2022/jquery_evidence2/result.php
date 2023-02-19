<?php
  include "dbconfig.php";
  $id = $_GET['student_id'];
  $result = $db->query("SELECT * FROM view_result WHERE student_id=$id");
  if($result->num_rows==0){
    echo "<h4 class='text-danger'>No Result</h4>";
  } else{
?>
<table class="table table-hover" style="width: 100%;">
  <tr>
    <th>Name</th>
    <th>Exam Name</th>
    <th>MCQ</th>
    <th>Evidence</th>
    <th>Total</th>
    <th>Result</th>
  </tr>
<?php
  while($row = $result->fetch_assoc()){
?>
  <tr>
    <td><?php echo $row['student_name']; ?></td>
    <td><?php echo $row['exam_name']; ?></td>
    <td><?php echo $row['mcq']; ?></td>
    <td><?php echo $row['evidence']; ?></td>
    <td><?php echo $row['total']; ?></td>
    <td>
      <?php
        $mcq = $row['mcq'];
        $evd = $row['evidence'];
        if($mcq >= 30 && $evd >= 30){
          echo "<span class='text-success'>PASS</span>";
        } else{
          echo "<span class='text-danger'>FAIL</span>";
        }
      ?>
    </td>
  </tr>
<?php
  }
?>
</table>
<?php } ?>