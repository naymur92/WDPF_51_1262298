<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File-Upload</title>
</head>
<body>
    <h2>Student's Class Note Submission</h2>
    <form action="" enctype="multipart/form-data" method="post">
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" placeholder="Enter your E-mail"><br>
        <label for="lastname">Last Name:</label><br>
        <input type="text" id="lastname" name="lastname" placeholder="Enter your Last Name"><br>
        <label for="classnotes">Class Notes:</label><br>
        <input type="file" id="classnotes" name="classnotes"><br>
        <input type="submit" name="submit" value="Submit Notes">
    </form>

    <?php
        // Set display_error=Off for this page
        ini_set("display_errors","Off");
    
        // Set a constant
        define("FILEREPOSITORY", "/opt/lampp/htdocs/WDPF_51_1262298/PHP/File Uploader_Uploaded Files");

        // Make sure that the file was POSTed.
        if($_FILES['classnotes']['error'] == UPLOAD_ERR_OK){
            if(is_uploaded_file($_FILES['classnotes']['tmp_name'])){
                // Was the file a PDF?
                if($_FILES['classnotes']['type'] != "application/pdf"){
                    echo "<p>Class notes must be uploaded in PDF format</p>";
                } else{
                    // Move uploaded file to final destination.
                    $result = move_uploaded_file($_FILES['classnotes']['tmp_name'],
                                FILEREPOSITORY.'/'.$_POST['lastname'].'_'.$_FILES['classnotes']['name']);
                    
                    if($result == 1) echo "<p>File successfully uploaded.</p>";
                    else echo "<p>There was a problem uploading the file.</p>";
                }                
            }
        } else{
            echo "<p?>There was a problem with the upload. Error Code {$_FILES['classnotes']['error']}</p>";
        }
    
    ?>
</body>
</html>