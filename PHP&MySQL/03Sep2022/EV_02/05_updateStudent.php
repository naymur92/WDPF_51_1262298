<!doctype html>
<html lang="en">
  <head>
    <title>EV-02_Q-05</title>
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
                    <h1 class="text-center">Student Update Form</h1>
                </div>
                <?php
                    $db = new mysqli("localhost", "root", "", "idb_bisew");
                    $id = $_GET['id'];
                    $result = $db->query("SELECT * FROM student WHERE id=$id");
                    $row = $result->fetch_assoc();
                ?>
                <form action="" method="post">
                    <table>
                        <tr>
                            <th>Name</th>
                            <td><input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>"></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>
                                <textarea name="address" class="form-control" rows="5"><?php echo $row['address'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td><input type="text" class="form-control" name="mobile" value="<?php echo $row['mobile'] ?>"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" class="btn btn-primary" name="submit" value="UPDATE DATA"></td>
                        </tr>
                    </table>
                </form>
                <?php
                    if(isset($_POST['submit'])){
                        extract($_POST);
                        $db->query("UPDATE student SET name='$name', address='$address', mobile='$mobile' WHERE id=$id");

                        if($db->affected_rows > 0){
                            header("Location:studentList.php");
                        } else {
                            echo "<h4 class='text-danger'>There is a problem in update data.</h4>";
                        }
                    }
                ?>
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