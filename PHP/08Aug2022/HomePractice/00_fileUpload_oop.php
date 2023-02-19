<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload OOP</title>
</head>
<body>
    <h3>PHP OOP- File Uploading</h3>
    <form action="" enctype="multipart/form-data" method="post">
        <label for="file">Select a file:</label><br>
        <input type="file" id="file" name="file"><br><br>
        <input type="submit" name="submit" value="Upload File">
    </form>    
    <?php
    
        class fileUpload {
            private $name;
            private $type;
            private $size;
            private $tmpname;
            private $dest;
            private $moved;

            public $errors = array();

            // Set destination address
            public function destFolder($folderLocation)
            {
                $this->dest = $folderLocation;
            }

            // Set file detailes
            public function setDetails($filesarray)
            {
                $this->name = $filesarray['file']['name'];
                $this->type = $filesarray['file']['type'];
                $this->tmpname = $filesarray['file']['tmp_name'];
                $this->size = $filesarray['file']['size'];

            }

            // Checking upload
            public function checkUpload(){
                if(! is_uploaded_file($this->tmpname)) $this->errors[] = "<p>File didn't uploaded.</p>";
            }

            // Checking size limit 500 KB
            public function checkSize(){
                if($this->size > 500*1024) $this->errors[] = "<p>File size must be up to 500 KB.</p>";
            }

            // Checking type photo/img
            public function checkType(){
                if($this->type != "image/jpeg") $this->errors[] = "<p>File must be an image file.</p>";
            }

            
            //Check criteria and Move Uploaded file
            public function moveUploadedFile(){
                //Calling all methods
                $this->checkUpload();
                $this->checkSize();
                $this->checkType();

                // Printing errors
               if(count($this->errors) > 0){
                    $this->moved = 0;
                    foreach($this->errors as $err){
                        echo $err;
                    }
               } else{
                    // Moving the file
                    move_uploaded_file($this->tmpname, $this->dest.'/'.$this->name);
                    $this->moved = 1;
               }
            }
            
            // Return file path to user
            public function relativePath($path){
                if($this->moved == 1){
                    return $path.$this->name;
                }
            }

        }
        // Closing class


        if(isset($_POST['submit'])){
            // Creating object
            $objFile = new fileUpload;

            // Set the uploading folder location
            $loc = "/opt/lampp/htdocs/WDPF_51_1262298/PHP/File Uploader_Uploaded Files";            
            $objFile -> destFolder($loc);

            // Set Uploaded folder relative path
            $path = "../../File Uploader_Uploaded Files/";

            $objFile->setDetails($_FILES);
            $objFile->moveUploadedFile();
        }        
    
    ?>

    <!-- Show the image -->
    <br>
    <img src="<? echo $objFile->relativePath($path); ?>" alt="" width="400">

</body>
</html>