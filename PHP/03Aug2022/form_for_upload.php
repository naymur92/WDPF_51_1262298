<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upload Form</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="UPLOAD">
    </form>

    <?php
        // echo "<pre>";
        // print_r($_FILES);

        if(isset($_POST['submit'])){
            $name = $_FILES['file']['name'];

            $name_array = explode('.', $name);
            $ext = strtolower(end($name_array));

            // $path = $_FILES['file']['full_path'];
            $type = $_FILES['file']['type'];
            $tmp = $_FILES['file']['tmp_name'];
            $error = $_FILES['file']['error'];
            $size = $_FILES['file']['size'];

            $fileTypes = array("jpg", "png", "jpeg");

            $errors = array();

            if($size > 1024*1024){
                $errors[] = "Size must be within 500KB";
            }
            if(!in_array($ext, $fileTypes)){
                $errors[] = "File type must be JPG, JPEG or PNG";
            }

            if(count($errors) > 0){
                foreach($errors as $err){
                    echo $err . "<br>";
                }
            } else{
                move_uploaded_file($tmp, 'Uploads/'.$name);
            }

        }
    
    ?>
</body>
</html>