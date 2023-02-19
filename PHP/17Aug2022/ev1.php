<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>File Upload</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="Upload File">
    </form>

    <?php
        if(isset($_POST['submit'])){
            // print_r($_FILES['file']);
            $size = $_FILES['file']['size'];
            $type = $_FILES['file']['type'];
            // Supported types
            $types = array("image/jpeg", "image/png", "document/pdf");

            // For storing error
            $error = array();

            if(!in_array($type, $types)){
                $error[] = "File must be an image or pdf file";
            }
            if($size > 400*1024){
                $error[] = "File size must up to 400 KB";
            }

            if(count($error) > 0){
                foreach($error as $err){
                    echo $err. "<br>";
                }
            } else {
                echo "File is successfully Verified";
            }
        }
    ?>
</body>
</html>