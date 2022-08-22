<?php $db = new mysqli("localhost", "root", "", "students"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Entry Form</title>
</head>
<body>
    <h1>Student Entry Form</h1>
    <form action="" method="post">
        <input type="number" name="id" placeholder="Enter Unique ID">
        <input type="text" name="name" placeholder="Enter Full Name">
        <input type="email" name="email" placeholder="Enter Unique email">
        <input type="text" name="phone" placeholder="Enter phone number">
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    <hr>
    <a href="studentList.php">Student List</a>
    <?php
    
        extract($_POST);
        if(isset($submit)){
            $sql = "INSERT INTO students VALUES ('$id', '$name', '$email', '$phone')";
            if($db -> query($sql)) echo "<p>Upload Success</p>";

            // if($db -> affected_rows > 0) echo "Successfully Inserted";
        }
    ?>
</body>
</html>