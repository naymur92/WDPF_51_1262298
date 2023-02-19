<!doctype html>
<html lang="en">
  <head>
    <title>Q3_DeleteManufacturer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6">
                <div class="jumbotron">
                    <h1 class="text-primary text-center display-5">Delete Manufacturer</h1>
                </div>
                <?php
                    $db = new mysqli("localhost", "root", "", "midMonthEvidence");
                    if(isset($_POST['submit'])){
                        extract($_POST);
                        $db->query("DELETE FROM Manufacturer WHERE id=$manu_id");
                        if($db->affected_rows>0){
                            echo "<h4 class='text-danger'>Delete Successfully</h4>";
                        }
                    }
                ?>
                <form action="" method="post" style="width: fit-content; margin:0 auto;">
                    <select name="manu_id" class="form-control">
                        <option value="" disabled selected>Select One</option>
                        <?php
                            $result = $db->query("SELECT * FROM Manufacturer");
                            while($row = $result->fetch_assoc()){
                        ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <br>
                    <input type="submit" name="submit" value="DELETE" class="btn btn-danger my-1">
                </form>
                <a href="04_viewProduct.php" class="btn btn-link">Product List</a><br>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>