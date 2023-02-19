<?php include_once("dbconfig.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Product List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
        <h1>Product List</h1>
        <table class="table table-striped table-hover">
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Action</th>
            </tr>
            
            <?php
                $sql = "SELECT * FROM products";
                $result = $db->query($sql);

                while($data = $result->fetch_assoc()){
            ?>

            <tr>
                <td><?php echo $data['product_id']; ?></td>
                <td><?php echo $data['product_name']; ?></td>
                <td><?php echo $data['product_price']; ?></td>
                <td>
                    <a href="productDelete.php?id=<?php echo $data['product_id']; ?>" onclick="return confirm('Are You Sure?')"><span class="glyphicon glyphicon-trash"></span></a>

                    <a href="productEdit.php?id=<?php echo $data['product_id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                </td>
            </tr>

            <?php
                }            
            ?>
        </table>
        <hr>
        <a href="productForm.php">Product Form</a>
    </div>
    

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  </body>
</html>