<?php $db = new mysqli("localhost", "root", "", "wdpf51"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Update Table</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="jumbotron bg-primary text-white text-center">
            <h2>Update Record</h2>
        </div>

        <?php
            // Receive passing data
            $old_id = $_GET['id'];
            $result = $db -> query("SELECT * FROM students WHERE student_id=$old_id");
            $data = $result -> fetch_assoc();   // Retrive Data    
        ?>

        <form action="" method="post">
            <table>
                <tr>
                    <th>student_id</th>
                    <td><input type="text" name="id" value="<?php echo $data['student_id']; ?>" placeholder="Enter ID" size="35"></td>
                </tr>
                <tr>
                    <th>student_name</th>
                    <td><input type="text" name="name" value="<?php echo $data['student_name']; ?>" placeholder="Enter Name" size="35"></td>
                </tr>
                <tr>
                    <th>student_email</th>
                    <td><input type="text" name="email" value="<?php echo $data['student_email']; ?>" placeholder="Enter Email" size="35"></td>
                </tr>
                <tr>
                    <th>student_phone</th>
                    <td><input type="text" name="phone" value="<?php echo $data['student_phone']; ?>" placeholder="Enter Phone" size="35"></td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" class="btn btn-primary" name="submit" value="UPDATE DATA">
                        <button class="btn btn-danger" onclick="window.close()">CLOSE</button>
                    </td>
                </tr>
            </table>
        </form>
        <?php
        
            if(isset($_POST['submit'])){
                extract($_POST);
                $db -> query("UPDATE students SET student_id='$id', student_name='$name', student_email='$email', student_phone='$phone' WHERE student_id='$old_id'");
                
                if($db -> affected_rows > 0){
        ?>
                <script>
                    window.close();                    
                </script>
        <?php
                }
            }        
        ?>
    </div>
    <!-- Optional JavaScript -->
    <script>
        // script for parent page refreshing on child close
        window.onunload = refreshParent;
        function refreshParent() {
            window.opener.location.reload();
        }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>