<!doctype html>
<html lang="en">
  <head>
    <title>District List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="../../jquery-3.6.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
      .content{
        border: 1px solid #007bff;
        padding: 10px;
        border-radius: 10px;
      }
      select{
        outline: 1px solid #007bff;
        width: 300px !important;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-6 content">
          <!-- Heading -->
          <div class="jumbotron bg-primary">
            <h1 class="text-center text-white">District List</h1>
            <p class="text-right text-white">-Division wise district list</p>
          </div>
          <div class="row justify-content-center">
            <form action="">
              <!-- Show Division list -->
              <label for="division"><strong>Division:</strong></label>
              <select name="" id="division" class="form-control">
                <option value="" disabled selected>Select One</option>
                <?php
                  $dbcon = new mysqli('localhost', 'root', '', 'jquery_evidence');
                  $result = $dbcon->query("SELECT * FROM divisions");
                  while($row = $result->fetch_assoc()){
                    echo "<option value='{$row['id']}'>{$row['division_name']}</option>";
                  }
                ?>
              </select>

              <!-- Show District List here -->
              <label for="district"><strong>District:</strong></label>
              <select name="" id="district" class="form-control">
                <option value="" disabled selected>Select One</option>
              </select>
            </form>
          </div>
        </div>
      </div>
    </div>
      
    <!-- Optional JavaScript -->
    <script>
      $(document).ready(function(){
        $("#division").change(function(){
          var id = $(this).val();

          $.post('2.process.php', {division:id}, function(output){
            $("#district").html(output);
          });
        });        
      });
    </script>
    <!-- first Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>