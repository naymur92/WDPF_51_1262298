<!doctype html>
<html lang="en">
  <head>
    <title>EV-02_Q-03</title>
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
                    <h1 class="text-center">Student Insert Form</h1>
                </div>
                <form action="" method="post">
                    <table>
                        <tr>
                            <th>Name</th>
                            <td><input type="text" class="form-control" name="name" placeholder="Enter Student Name"></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>
                                <textarea name="address" class="form-control" rows="5" placeholder="Enter Address"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td><input type="text" class="form-control" name="mobile" placeholder="Enter Student Mobile"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" class="btn btn-primary" name="submit" value="SAVE DATA"></td>
                        </tr>
                    </table>
                </form>
                <?php
                    if(isset($_POST['submit'])){
                        extract($_POST);
                        $db = new mysqli("localhost", "root", "", "idb_bisew");
                        $db->query("CALL insertIntoStudent('$name', '$address', '$mobile')");

                        if($db->affected_rows > 0){
                            echo "<h4 class='text-success'>Submit Success</h4>";
                        } else {
                            echo "<h4 class='text-danger'>There is a problem in submit data.</h4>";
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