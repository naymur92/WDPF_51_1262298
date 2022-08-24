<?php
    include_once("dbconfig.php");
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container-fluid">
        <div class="jumbotron p-3 text-center">
            <h2>Login Page</h2>
        </div>
        <form action="checkLogin.php" method="post">
            <table>
                <tr>
                    <th>Email:</th>
                    <td><input type="email" name="email" placeholder="Enter email" class="form-control"></td>
                </tr>
                <tr>
                    <th>Password:</th>
                    <td><input type="password" name="pass" placeholder="Enter Password" class="form-control"></td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" name="submit" value="LOGIN" class="btn btn-primary">
                        <button class="btn btn-danger my-2" onclick="window.close();">CLOSE</button>
                    </td>
                </tr>
            </table>
        </form>
        <?php        
            if(isset($_GET['m'])){
                echo "<p class='text-warning'>" . $_GET['m'] . "</p>";
            }        
        ?>
      </div>
    <!-- Optional JavaScript -->
    <script>
        // script for parent page redirecting on child close
        window.onunload = refreshParent;
        function refreshParent() {
            // window.opener.location.reload();
            window.opener.location.href = "dashboard.php";
        }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>