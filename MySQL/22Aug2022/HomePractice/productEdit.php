<?php include_once("dbconfig.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Product Update Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  </head>
  <body>
    <?php
        $id1 = $_GET['id'];
        $result = $db->query("SELECT * FROM products WHERE product_id=$id1");
        $data = $result->fetch_assoc();
    ?>
    <div class="container">
        <h1>Product Update Form</h1>
        <form action="" method="post">
            <input type="number" name="id" value="<?php echo $data['product_id'];?>" placeholder="Enter product id" disabled>
            <input type="text" name="name" value="<?php echo $data['product_name'];?>" placeholder="Product name">
            <input type="text" name="price" value="<?php echo $data['product_price'];?>" placeholder="Enter price">
            <input type="submit" name="submit" value="UPDATE PRODUCT">
        </form>
        <hr>
        <a href="productList.php">Product List</a>
    </div>
    
    <?php
    
        extract($_POST);
        if(isset($submit)){
        $sql = "UPDATE products SET product_name='$name', product_price='$price' WHERE product_id=$id1";

        if($db->query($sql)) echo "<p>Upload Success</p>";
      }

    ?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>