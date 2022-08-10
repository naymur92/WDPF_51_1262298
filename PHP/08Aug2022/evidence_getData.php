<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscriber Form</title>
</head>
<body>
    <h2>Subscriber Form</h2>
    <form action="" method="post">
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id" placeholder="Enter your id"><br>
        
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Enter your name"><br>
        
        <label for="email">E-mail:</label><br>
        <input type="text" id="email" name="email" placeholder="Enter your E-mail"><br>
        
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" placeholder="Enter Phone number"><br><br>
        
        <input type="submit" name="submit" value="SUBSCRIBE">
    </form>

    <?php        
    
        if(isset($_POST['submit'])){
            // Creating an array for storing form data
            $inputs = array();
            // Taking data from user
            $inputs[] = $_POST['id'];
            $inputs[] = $_POST['name'];
            $inputs[] = $_POST['email'];
            $inputs[] = $_POST['phone'];

            // Open the file handler in write mode
            $fh = fopen("output.txt", 'a');

            //empty value identifier
            $empty = 0;

            // Start a loop for writing each data
            foreach($inputs as $input){
                if($input != null) {
                    fwrite($fh, $input." | ");
                    $empty = 1;
                }
            }
            // Enter a new line
            if($empty == 1) fwrite($fh, "\n");

            // Close the handlers
            fclose($fh);

            echo "<h3>Subscribers List</h3>";
            // Creating Table
            echo "<table border='1' width='600'>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Phone Number</th>
                    </tr>";
            // Opening the file
            $data = file('output.txt');

            foreach($data as $line){
                list($id, $name, $email, $phone) = explode(" | ", $line);
                echo "<tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$phone</td>
                    </tr>";
            }
            // Closing table
            echo "</table>";
        }
    
    ?>
</body>
</html>