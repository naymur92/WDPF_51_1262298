<?php $db = new mysqli("localhost", "root", "", "students"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Student List</title>
</head>
<body>
    <div class="container">
        <h1>Student Lists</h1>
        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            <?php
                $sql = "SELECT * FROM students";
                $result = $db -> query($sql);
                echo "<h2>Total record found: $result->num_rows</h2>";
                while($data = $result -> fetch_assoc()){
                    ?>
                        <tr>
                            <td><?php echo $data['student_id'] ?></td>
                            <td><?php echo $data['student_name'] ?></td>
                            <td><?php echo $data['student_email'] ?></td>
                            <td><?php echo $data['student_phone'] ?></td>
                            <td>
                                <a href="delete.php?id=<?php echo $data['student_id'] ?>" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></a>

                                <a href="edit.php?id=<?php echo $data['student_id'] ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                            </td>

                        </tr>

                    <?php
                }
            ?>
        </table>
        <hr>
        <a href="studentForm.php">Student Form</a>
    </div>
    
</body>
</html>