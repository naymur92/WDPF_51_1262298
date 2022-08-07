<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Move Uploaded File</title>
</head>
<body>
    <h1>Upload Form</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"><br>
        <input type="submit" name="submit" value="Upload File">
    </form>



    <?php
    
        if(isset($_POST['submit'])){
            // echo "<pre>";
            $dest = "/opt/lampp/htdocs/WDPF_51_1262298/PHP/File Uploader_Uploaded Files/".$_FILES['file']['name'];
            // print_r($_FILES);
            if(move_uploaded_file($_FILES['file']['tmp_name'], $dest)){
                echo "Your file have been uploaded.";
            }
            else{
                echo "Not uploaded.";
            }

        }
    
    ?>
</body>
</html>