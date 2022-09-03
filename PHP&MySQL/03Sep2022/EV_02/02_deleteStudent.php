<!doctype html>
<html lang="en">
  <head>
    <title>EV-2_Q-2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-5">
                <h1>Delete Student</h1>
                <?php
                    $db = new mysqli("localhost", "root", "", "idb_bisew");
                    $result = $db->query("SELECT * FROM student");

                    if(isset($_POST['submit'])){                        
                        $id = $_POST['student'];
                        $db->query("DELETE FROM student WHERE id='$id'");
                        
                        if($db->affected_rows > 0){
                            echo "<h4 class='text-success'>Record is deleted.</h4>";
                        } else{
                            echo "<h4 class='text-alert'>There is a problem in Delete Record!</h4>";
                        }
                        
                    }
                    

                
                ?>
                <form action="" method="post">
                    <select name="student" id="">
                        <option value="" disabled>Select One</option>
                        <?php
                            while($row = $result -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <input type="submit" name="submit" class="btn btn-danger" value="DELETE">
                </form>
                <a href="studentList.php" class="btn btn-link">Student List</a>
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