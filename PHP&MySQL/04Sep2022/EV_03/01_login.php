<!doctype html>
<html lang="en">
  <head>
    <title>Q-01_LoginForm</title>
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
                <div class="section p-4 bg-light rounded my-4">
                    <div class="jumbotron">
                        <h1 class="display-4 text-center">Login Form</h1>
                    </div>
                    <form action="" method="post" style="width: fit-content; margin: 0 auto;">
                        <table>
                            <tr>
                                <th>Username</th>
                                <td><input type="text" name="username" placeholder="Enter username" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Password</th>
                                <td><input type="password" name="password" placeholder="Enter password" class="form-control"></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><input type="submit" name="submit" value="LOGIN" class="btn btn-primary"></td>
                            </tr>
                        </table>
                    </form>
                    <?php
                        $db = new mysqli("localhost", "root", "", "myCompany");

                        if(isset($_POST['submit'])){
                            $username = $_POST['username'];
                            $password = SHA1($_POST['password']);

                            $result = $db->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
                            if($result->num_rows != 1){
                                echo "<h4 class='text-danger'>Invalid Login</h4>";
                            } else{
                                echo "<h4 class='text-success'>Login Success</h4>";
                            }
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