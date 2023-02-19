<?php include "dbconfig.php" ?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script>
    $(function() {
      $("#batchid").change(function() {
        var id = $(this).val();

        $.get(
          'student_list.php',
          {batch_id: id},
          function(data) {
            $("#students").html(data);
          }
        );
      });

      $("#students").change(function(){
        var std_id = $(this).val();

        $.get(
          'result.php',
          {student_id:std_id},
          function(data){
            $("#show").html(data);
          }
        );
      });
    });
  </script>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="card">
          <div class="card-header">
            <h1 class="text-center">Show Result</h1>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-center">
              <form action="">
                <table class="table-responsive">
                  <tr>
                    <th>Select Batch</th>
                    <td>
                      <select name="" id="batchid" class="form-control">
                        <option value="" disabled selected>Select One</option>
                        <?php
                        $result = $db->query("SELECT * FROM batches");
                        while ($row = $result->fetch_assoc()) {
                        ?>
                          <option value="<?= $row['batch_id'] ?>"><?= $row['batch_id'] . " - " . $row['batch_name'] ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <th>Select Student</th>
                    <td>
                      <select name="" id="students" class="form-control">
                        <option value="" selected disabled>Select One</option>
                      </select>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div id="show" class="d-flex justify-content-center"></div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>