<?php include_once("dbconfig.php") ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Delete Manufacturer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Delete Manufacturer</h1>

        <?php
        // Delete part
            if(isset($_POST['submit'])){
                $db->query("DELETE FROM Manufacturer WHERE id={$_POST['manu_id']}");
                if($db->affected_rows>0){
                    $error = "<h3 class='text-danger'>Successfully Deleted</h3>";
                }
            }
        ?>

        <form action="" method="post">
            <select name="manu_id" id="">
                <option value="" disabled>Select One</option>
                <?php
                    $sql = "SELECT * FROM Manufacturer";
                    $result = $db->query($sql);
                    while($row = $result->fetch_assoc()){
                ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                <?php
                    }
                ?>
            </select>
            <input type="submit" class="btn btn-danger" name="submit" value="DELETE">
        </form>
        <br>
        <a href="manufacturers.php" class="btn btn-primary">Manufacturer List</a>
        <?php
            if(isset($error)){
                echo $error;
            }
        ?>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>