<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_FILES Superglobal</title>
</head>
<body>
    <h1>Upload Form</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"><br>
        <input type="submit" name="submit" value="Upload File">
    </form>



    <?php
    
        if(isset($_POST['submit'])){
            echo "<pre>";
            print_r($_FILES);

        }
    
    ?>
</body>
</html>