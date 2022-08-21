<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EV4_Q1</title>
</head>
<body>
    <h1>File Upload</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"><br><br>
        <input type="submit" name="submit" value="Upload File">
    </form>

    <?php
        // echo "<pre>";
        // print_r($_FILES['file']);
        
        function fileUpload($file){
            $name = $file['name'];
            $size = $file['size'];
            $tmp = $file['tmp_name'];            
            $errors = array();

            $ext = strtolower(end(explode(".", $name)));
            $types = array("jpg", "jpeg", "png", "pdf", "doc", "docx");

            $newname = time() . "." . $ext;

            if(is_uploaded_file($tmp)){
                if(!in_array($ext, $types)){
                    $errors[] = "Unsupported file type";
                }
                if($size >= 400*1024){
                    $errors[] = "File size must be below 400 KB";
                }

                if(count($errors) > 0){
                    foreach($errors as $err){
                        echo "<h3>$err</h3>";
                    }
                } else if(move_uploaded_file($tmp, "../../UploadedFiles/$newname")){
                    echo "<h3>Successfully Uploaded</h3>";
                }
            }

            // echo $ext;
        }

        extract($_POST);

        if(isset($submit)){
            fileUpload($_FILES['file']);
        }
    
    ?>
</body>
</html>