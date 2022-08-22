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
    <?php
        $id1 = $_GET['id1'];
        extract($_POST);
        if(isset($submit)){
            $sql = "UPDATE students SET student_id='$id', student_name = '$name', student_email = '$email', student_phone = '$phone' WHERE student_id = '$id1'";
            $db -> query($sql);

            // if($db -> affected_rows > 0) echo "Successfully Inserted";
        }
    
        
        // echo $id1;
        $sql = "SELECT * FROM students WHERE student_id = '$id1'";
        $result = $db->query($sql);
        $data = $result->fetch_assoc();
        // define("oldid", $data['student_id']);
        // $oldid = $data['student_id'];

        
    
    ?>
    <h1>Student Entry Form</h1>
    <form action="" method="post">
        <input type="number" name="id" value="<?php echo $data['student_id'] ?>" placeholder="Enter Unique ID">
        <input type="text" name="name" value="<?php echo $data['student_name'] ?>" placeholder="Enter Full Name">
        <input type="email" name="email" value="<?php echo $data['student_email'] ?>" placeholder="Enter Unique email">
        <input type="text" name="phone" value="<?php echo $data['student_phone'] ?>" placeholder="Enter phone number">
        <input type="submit" name="submit" value="UPDATE">
    </form>
    <hr>
    <a href="studentList.php">Student List</a>
    <?php
        if(isset($submit)){
            if($db->affected_rows > 0){
                echo "<p>Update Success</p>";
            }
        }
        
    ?>
</body>
</html>