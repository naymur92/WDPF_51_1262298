<?php
  session_start();
  if(!isset($_SESSION['user_email'])){
    header("Location:index.php");
  }

  include("includes/dbcon.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Product Entry Form</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include("includes/topbar.php") ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include("includes/left_sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Entry</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Entry</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">All Product Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputName">Product Name</label>
                    <input type="text" name="pname" class="form-control" id="inputName" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="inputDetails">Product Details</label>
                    <textarea name="pdetails" id="inputDetails" class="form-control" placeholder="Enter product details" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="inputPrice">Product Price</label>
                    <input type="text" name="pprice" class="form-control" id="inputPrice" placeholder="Enter price">
                  </div>
                  <div class="form-group">
                    <label for="inputThumb">Product Thumb</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="pthumb" class="custom-file-input" id="inputThumb">
                        <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputManuID">Manufacturer ID</label>
                    <select name="manu_id" id="inputManuID" class="form-control">
                      <option value="" selected hidden>Select One</option>
                      <?php
                        $result = $dbcon->query("SELECT * FROM manufacturer");
                        while($row = $result->fetch_assoc()){
                      ?>
                      <option value="<?php echo $row['m_id'] ?>"><?php echo $row['m_id']. "-" . $row['m_name']; ?></option>
                      <?php
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <?php
                if($_POST){
                  $pname = $_POST['pname'];
                  $pdetails = $_POST['pdetails'];
                  $pprice = $_POST['pprice'];
                  $manu_id = $_POST['manu_id'];

                  // Upload file name
                  // print_r($_FILES);
                  $file_name = $_FILES['pthumb']['name'];
                  $tmp_name = $_FILES['pthumb']['tmp_name'];
                  $size = $_FILES['pthumb']['size'];
                  $ext = explode(".", $file_name);
                  $ext = end($ext);
                  $ext = strtolower($ext);
                  $types = array("jpg", "jpeg", "png", "gif");
                  $newFileName = $pname . "_manuid(". $manu_id . ")." . $ext;

                  if(in_array($ext, $types)){
                    if(is_uploaded_file($tmp_name)){
                      move_uploaded_file($tmp_name, "dist/img/pthumbs/$newFileName");
                    }
                  }

                  $sql = "INSERT INTO products VALUES(NULL, '$pname', '$pdetails', '$pprice', '$newFileName', $manu_id)";
                  $dbcon->query($sql);
                  if($dbcon->affected_rows>0){
                    echo "<p class='text-success'>Insert Success</p>";
                  }
                }
              ?>
            </div>
            <!-- /.card -->
        </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("includes/footer.php") ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
