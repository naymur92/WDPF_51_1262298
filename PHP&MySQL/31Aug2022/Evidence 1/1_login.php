<?php $db = new mysqli("localhost", "root", "", "Company") ?>
<?php
    session_start();
    if(isset($_SESSION['uname'])){
        header("Location:1_dashboard.php");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container my-4">
          <div class="row justify-content-md-center">
              <div class="col-lg-6">
                <div class="section bg-light p-5 rounded">
                    <div class="jumbotron">
                        <h1 class="display-4 text-center">Login Form</h1>
                    </div>
                    <form action="checkLogin.php" method="post">
                        <table>
                            <tr>
                                <th>User Name</th>
                                <td><input type="text" class="form-control" name="user" placeholder="Enter username"></td>
                            </tr>
                            <tr>
                                <th>Password</th>
                                <td><input type="password" class="form-control" name="pass" placeholder="Enter password"></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><input type="submit" class="btn btn-primary" name="submit" value="LOGIN"></td>
                            </tr>
                        </table>
                    </form>
                    <?php
                        if(isset($_GET['msg'])){
                            echo "<h4 class='text-danger'>Invalid username or password!</h4>";
                        }
                        
                    ?>
                </div>
                
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