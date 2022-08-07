<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h2>File Uploading Form</h2>
    <form action="" method="post" enctype="multipart/form-data">
        Select a file: <br>
        <input type="file" name="file"><br>
        <input type="submit" name="submit" value="Upload">
    </form>
    <?php
    
        if(isset($_POST['submit'])){
            // echo "<pre>";
            // print_r($_FILES);

            $dest = "/opt/lampp/htdocs/WDPF_51_1262298/PHP/File Uploader_Uploaded Files/";
            $name = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];

            //Extracting Extension
            $ext = explode(".", $name);
            $ext = strtolower(end($ext));

            //allowable formats
            $formats = array("jpg", "jpeg", "png", "gif");
            $tmp = $_FILES['file']['tmp_name'];

            //Error list
            $errors = array();

            if(!in_array($ext, $formats)) $errors[] = "File type must be jpg, jpeg, png or gif.";
            if($size > 500*1024) $errors[] = "File size must be up to 500 KB.";

            if(count($errors) > 0){
                foreach($errors as $err){
                    echo $err . "<br>";
                }
            } else if(move_uploaded_file($tmp, ($dest.'/'.$name))){
                echo "<br><img src='../File Uploader_Uploaded Files/$name' width='400'>";
            }
        }
    
    ?>
</body>
</html>