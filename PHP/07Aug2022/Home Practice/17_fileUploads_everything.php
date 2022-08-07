<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploads Everything</title>
</head>
<body>
    <h1>Upload Form</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"><br>
        <input type="submit" name="submit" value="Upload File">
    </form>



    <?php
    
        if(isset($_POST['submit']))
        {
            // echo "<pre>";
            // print_r($_FILES);

            $name = $_FILES['file']['name'];
            //echo $name;
            
        //Extracting Extensions
            $name_array = explode(".", $name);
            // print_r($name_array);
            $extension = strtolower(end($name_array));
            // echo $extension;

            $type = $_FILES['file']['type'];
            $tmp = $_FILES['file']['tmp_name'];
            $error = $_FILES['file']['error'];
            $size = $_FILES['file']['size'];

            $dest = "/opt/lampp/htdocs/WDPF_51_1262298/PHP/File Uploader_Uploaded Files/".$name;

            $errors = array();

        //Converting size into KB
            $size = round($size/1024, 2);

        //supported file extensions
            $s_extensions = array("jpg", "png", "pdf", "jpeg");


        //Validating Upload
            if(!in_array($extension, $s_extensions)){
                $errors[] = "File type does not supports.<br>";
            }
            if($size > 900){
                $errors[] = "File size must be up to 900 KB.<br>";
            }


        //Outputing
            if(count($errors) > 0){
                foreach($errors as $err){
                    echo $err;
                }
            }
            else{
                move_uploaded_file($tmp, $dest);
                echo "File Uploaded Succesfully.";
            }

        }
    
    ?>
</body>
</html>