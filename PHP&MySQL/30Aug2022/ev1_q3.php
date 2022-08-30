<?php include_once("dbconfig.php") ?>
<!doctype html>
<html lang="en">
  <head>
    <title>EV-1_Q-3</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">

        <h1>Manufacturer Form</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <th>id</th>
                    <td><input type="text" class="form-control" name="id" placeholder="Auto Incremented" disabled></td>
                </tr>
                <tr>
                    <th>name</th>
                    <td><input type="text" class="form-control" name="name" placeholder="Enter Manufacturer Name"></td>
                </tr>
                <tr>
                    <th>address</th>
                    <td>
                        <textarea name="address" class="form-control" cols="30" rows="10" placeholder="Enter Address"></textarea>
                    </td>
                </tr>
                <tr>
                    <th>contact_no</th>
                    <td><input type="text" class="form-control" name="contact" placeholder="Enter Contact Number"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" class="btn btn-primary" name="submit" value="INSERT DATA"></td>
                </tr>
            </table>
        </form>

        <?php
        $db->query("DROP PROCEDURE IF EXISTS insert_into_manufacturer;");
        
        $procedure = <<<HEREDOC
        DELIMITER //
        CREATE PROCEDURE insert_into_manufacturer
        (
            IN name VARCHAR(50),
            IN address VARCHAR(100),
            IN contact VARCHAR(50)
        )
        BEGIN
        INSERT INTO Manufacturer
        VALUES(null, name, address, contact);
        END //
        DELIMITER ;
        HEREDOC;

        if($db->query($procedure)){
            echo "<p class='text-primary'>Successfully Created PROCEDURE.</p>";
        } else{
            echo "<p class='text-danger'>There is a problem in procedure Creation.</p>";
        }

        if(isset($_POST['submit'])){
            extract($_POST);
            if($db->query("CALL insert_into_manufacturer($name, $address, $contact)")){
                echo "<p class='text-primary'>Value added successfully.</p>";
            }
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