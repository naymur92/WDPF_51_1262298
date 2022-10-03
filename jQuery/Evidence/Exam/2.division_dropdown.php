<!doctype html>
<html lang="en">
  <head>
    <title>District Dropdown</title>
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
        border-radius: 5px;
      }
      select{
        outline: 1px solid #007bff;
        width: 250px !important;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-6 content">
          <div class="jumbotron bg-primary">
            <h1 class="text-center text-white">Division Dropdown</h1>
          </div>
          <div class="row justify-content-center">
            <form>
              <label for="division"><strong>Division:</strong></label><br>
              <select id="division" class="form-control">
                <option value="" selected disabled>Select One</option>
                <?php
                  $dbcon = new mysqli('localhost', 'root', '', 'jQuery_evidence');
                  $result = $dbcon->query("SELECT * FROM divisions");
                  while($row = $result->fetch_assoc()){
                    echo "<option value='{$row['id']}'>{$row['division_name']}</option>";
                  }
                ?>
              </select>
              <br>
              <label for="district"><strong>District:</strong></label>
              <select id="district" class="form-control">
                <option value="" selected disabled>Select One</option>
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
          var div = $(this).val();

          $.post('2.districts.php', {division:div}, function(data){
            $("#district").html(data);
          });
        });
      });
    </script>
    <!-- first Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>