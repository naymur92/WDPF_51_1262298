<?php
  ob_start();
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
  <title><?= isset($_GET['pid']) ? "Product Update Form" : "Product Entry Form"; ?></title>
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
          <div class="col-sm-5">
            <h1><?= isset($_GET['pid']) ? "Product Update" : "Product Entry"; ?></h1>
          </div>
          <div class="col-sm-2">
            <a href="products.php" class="btn btn-danger">Show All Products</a>
          </div>
          <div class="col-sm-5">
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

              <?php
                if(isset($_GET['pid'])){

                  $pid = $_GET['pid'];
                  $result = $dbcon->query("SELECT * FROM products WHERE pid=$pid");
                  $row = $result->fetch_assoc();

                  // Get filename from previus entry
                  if(isset($row['pthumb'])){
                    $oldFileName = $row['pthumb'];
                  }
                  $mid = $row['manu_id'];
                }
              ?>
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <!-- <label for="inputID">Product ID</label> -->
                    <input type="text" name="pid" class="form-control" id="inputID" placeholder="Enter ID" value="<?= isset($row['pid'])? $row['pid']: ''; ?>" hidden>
                  </div>
                  <div class="form-group">
                    <label for="inputName">Product Name</label>
                    <input type="text" name="pname" class="form-control" id="inputName" placeholder="Enter Name" value="<?= isset($row['pname'])? $row['pname']: ''; ?>">
                  </div>
                  <div class="form-group">
                    <label for="inputDetails">Product Details</label>
                    <textarea name="pdetails" id="inputDetails" class="form-control" placeholder="Enter product details" rows="5"><?= isset($row['pdetails'])? $row['pdetails']: ''; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="inputPrice">Product Price</label>
                    <input type="text" name="pprice" class="form-control" id="inputPrice" placeholder="Enter price" value="<?= isset($row['pprice'])? $row['pprice']: ''; ?>">
                  </div>
                  <fieldset class="rounded" style="border: 1px solid #ddd; padding: 10px">
                    <legend style="width: fit-content;">Product Thumb</legend>
                    <div class="form-group">
                      <label for="inputThumb"></label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="pthumb" class="custom-file-input" id="inputThumb" onchange="readURL(this);">
                          <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
                        </div>
                      </div>
                    </div>
                    <!-- Selected photo will show here -->
                    <img src="dist/img/pthumbs/<?= isset($row['pthumb'])? $row['pthumb'] : '' ?>" alt="selected image will show here" height="200px" id="showSelectedPhoto">
                  </fieldset>
                  <div class="form-group">
                    <label for="inputManuID">Manufacturer ID</label>
                    <select name="manu_id" id="inputManuID" class="form-control">
                      <option value="" <?= isset($mid)? '': "selected"; ?> hidden>Select One</option>
                      <?php
                        $result = $dbcon->query("SELECT * FROM manufacturer");
                        while($row = $result->fetch_assoc()){
                      ?>
                      <option value="<?php echo $row['m_id'] ?>" <?php if(isset($mid)){if($mid==$row['m_id']) echo "selected";} ?> ><?php echo $row['m_id']. "-" . $row['m_name']; ?></option>
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

                  // Set new filename every time
                  if(strlen($_FILES['pthumb']['name'])>0){
                    $file_name = $_FILES['pthumb']['name'];
                  } else{
                    $file_name = $oldFileName;
                  }

                  $tmp_name = $_FILES['pthumb']['tmp_name'];
                  $size = $_FILES['pthumb']['size'];
                  $ext = explode(".", $file_name);
                  $ext = end($ext);
                  $ext = strtolower($ext);
                  $newFileName = $pname . "_manufac(". $manu_id . ")." . $ext;
                  $types = array("jpg", "jpeg", "png", "gif");

                  if(in_array($ext, $types)){
                    if(is_uploaded_file($tmp_name)){
                      if(move_uploaded_file($tmp_name, "dist/img/pthumbs/$newFileName")){
                        // command for delete old file from folder
                        if(isset($oldFileName)){
                          unlink("dist/img/pthumbs/$oldFileName");
                        }
                      }
                    } else{
                      rename("dist/img/pthumbs/$oldFileName", "dist/img/pthumbs/$newFileName");
                    }
                  }
                  if(isset($pid)){    // code for update form data
                    $sql = "UPDATE products SET pname='$pname', pdetails='$pdetails', pprice='$pprice', pthumb='$newFileName', manu_id=$manu_id WHERE pid=$pid";

                    $dbcon->query($sql);
                    if($dbcon->affected_rows>0){
                      header("Location:products.php");
                    }
                  } else{   // code for insert form data
                    $sql = "INSERT INTO products VALUES(NULL, '$pname', '$pdetails', '$pprice', '$newFileName', $manu_id)";
                    $dbcon->query($sql);
                    if($dbcon->affected_rows>0){
                      echo "<p class='text-success'>Success</p>";
                    }
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


// script for show selected photo
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showSelectedPhoto').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
