<!doctype html>
<html lang="en">
  <head>
    <title>Q4_viewProduct</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6">
                <div class="jumbotron">
                    <h1 class="text-primary text-center display-3">Product List</h1>
                    <p class="text-right">Price is greater than 5000</p>
                </div>
                <table class="table table-striped table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Manufacturer ID</th>
                    </tr>
                    <?php
                        $db = new mysqli("localhost", "root", "", "midMonthEvidence");
                        $result = $db->query("SELECT * FROM viewProduct");
                        while(list($id, $name, $price, $m_id) = $result->fetch_row()){
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $m_id; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
                <a href="02_insertManu.php" class="btn btn-link">Manufacturer Entry</a><br>
                <a href="03_manuDelete.php" class="btn btn-link">Delete Manufacturer</a>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>