<!DOCTYPE html>
<html lang="en">
  <head>
    <title>District List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <script src="../../jquery-3.6.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-5">
          <div class="jumbotron">
            <h1>District List</h1>
            <hr>
          </div>
          <form>
            <table>
              <tr>
                <td><label for="division">Division</label></td>
                <td>
                  <select name="" id="division" class="form-control">
                    <option value="" selected disabled>Select One</option>
                    <?php
                      $dbcon = new mysqli('localhost', 'root' , '', 'jQuery_evidence');
                      $result = $dbcon->query("SELECT * FROM divisions");
                      while($row = $result->fetch_assoc()){
                    ?>
                      <option value="<?php echo $row['id'] ?>"><?php echo $row['division_name'] ?></option>
                    <?php
                      }
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td><label for="district">District</label></td>
                <td>
                  <select name="" id="district" class="form-control">
                    <option value="" selected disabled>Select One</option>
                  </select>
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <script type="text/javascript">
      $(document).ready(function () {
        $("#division").change(function(){
          var id = $(this).val();
          $.post(
            'process.php',
            {division:id},
            function(out){
              $("#district").html(out);
            }
          );
        });
      });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
