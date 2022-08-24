<?php
    include_once("dbconfig.php");
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>HomePage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="jumbotron text-center my-1" style="background-color: #e3f2fd;">
            <h1>Honey Link</h1>
            <h6>--Committed to Quality</h6>
        </div>
            <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
                <a class="navbar-brand" href="index.php">HoneyLink</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.php">Our Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Dashboard</a>
                        </li>
                    </ul>
                    <form class="form-inline my-1 my-lg-0">
                        <?php
                            if(isset($_SESSION['status'])){
                        ?>
                            <span class="mx-2 text-primary"><?php echo "Welcome, " . $_SESSION['email']; ?></span>
                            <a href="logout.php" class="btn btn-outline-danger form-control nav-link">Log Out</a>
                        <?php
                            } else{
                        ?>
                            <button class="form-control btn btn-outline-dark my-2 my-sm-0" onclick="openWin();">Login</button>
                        <?php
                            }
                        ?>
                    </form>
                </div>
            </nav>

            <div class="jumbotron my-1">
                <h1>Welcome</h1>
                <h3>This is home page</h3>
            </div>

            <div class="jumbotron text-center my-1 p-2" style="background-color: #e3f2fd;">
                <h6>&copy; Naymur Rahman</h6>
            </div> 
      </div>
    <!-- Optional JavaScript -->
    <script>
        // Setting window property
        var width = 500;    // Set Width
        var height = 300;   // Set Height
        var scrHeight = screen.height;
        var scrWidth = screen.width;
        var posTop = Math.round((scrHeight-height)/2);  // Calculate top position of windows
        var posLeft = Math.round((scrWidth-width)/2);   // Calculate left position of window
        // document.write(scrHeight);
        // document.write(posTop,", ", posLeft);
        
        // Function for opening window
        let loginForm;
        // let link;
        function openWin() {
            loginForm = window.open("login.php", "", "width=" + width + ",height=" + height + ",top=" + posTop + ",left=" + posLeft);
        }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>