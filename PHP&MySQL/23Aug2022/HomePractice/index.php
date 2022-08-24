<?php $db = new mysqli("localhost", "root", "", "wdpf51"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Student Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="jumbotron bg-primary text-white text-center">
                    <h1>Student Entry Form</h1>                    
                </div>

                <!-- Student Entry Form -->
                <form action="" method="post">
                    <table>
                        <tr>
                            <th>student_id</th>
                            <td><input type="text" name="id" placeholder="Enter ID" size="35"></td>
                        </tr>
                        <tr>
                            <th>student_name</th>
                            <td><input type="text" name="name" placeholder="Enter Name" size="35"></td>
                        </tr>
                        <tr>
                            <th>student_email</th>
                            <td><input type="text" name="email" placeholder="Enter Email" size="35"></td>
                        </tr>
                        <tr>
                            <th>student_phone</th>
                            <td><input type="text" name="phone" placeholder="Enter Phone" size="35"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" class="btn btn-primary" name="submit" value="SUBMIT DATA"></td>
                        </tr>
                    </table>
                </form>
            <?php
                // Code for student Entry
                if(isset($_POST['submit'])){
                    extract($_POST);
                    $sql = "INSERT INTO students VALUES('$id', '$name', '$email', '$phone')";    
                    $db->query($sql);    
                    if($db -> affected_rows > 0){
                        // echo "Success";
                        header("Location:index.php");
                    }
                }
            ?>
            </div>


            <!-- Students List -->
            <div class="col-md-9">
                <div class="jumbotron bg-primary text-white text-center">
                    <h1>Student's List</h1>
                </div>
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Student Email</th>
                        <th>Student Phone</th>
                        <th>Action</th>
                    </tr>

                    <?php
                        // Code for output table data
                        $sql = "SELECT * FROM students";
                        $result = $db -> query($sql);
                        while($data = $result -> fetch_assoc()){
                    ?>

                    <tr>
                        <td><?php echo $data['student_id'] ?></td>
                        <td><?php echo $data['student_name'] ?></td>
                        <td><?php echo $data['student_email'] ?></td>
                        <td><?php echo $data['student_phone'] ?></td>
                        <td>
                            <a href="studentDelete.php?id=<?php echo $data['student_id'] ?>" onclick="confirm: ('Are You Sure?')"><i class="fa fa-trash fa-2x"></i></a>
                            
                            <a href="" onclick="openWin('studentEdit.php?id=<?php echo $data["student_id"] ?>')"><i class="fa fa-pencil fa-2x"></i></a>
                        </td>
                    </tr>

                    <?php
                        }                    
                    ?>

                </table>
            </div>
        </div>
    </div>
    <script>
        // Setting window property
        var width = 500;    // Set Width
        var height = 350;   // Set Height
        var scrHeight = screen.height;
        var scrWidth = screen.width;
        var posLeft = Math.round((scrWidth-width)/2);   // Calculate left position of window
        var posTop = Math.round((scrHeight-height)/2);  // Calculate top position of windows
        
        // Function for opening window
        let editForm;
        let link;
        function openWin(link) {
            editForm = window.open(link, "", "width="+width+",height="+height+",top="+posTop+",left="+posLeft);
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>