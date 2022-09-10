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
  <title><?= isset($_GET['mid']) ? "Manufacturer Update Form" : "Manufacturer Entry Form"; ?></title>
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
            <h1><?= isset($_GET['mid']) ? "Manufacturer Update" : "Manufacturer Entry"; ?></h1>
          </div>
          <div class="col-sm-2">
            <a href="manufacturers.php" class="btn btn-danger">Show All Manufacturer</a>
          </div>
          <div class="col-sm-5">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active"><?= isset($_GET['mid']) ? "Manufacturer Update" : "Manufacturer Entry"; ?></li>
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
                <h3 class="card-title">All Manufacturer Details</h3>
              </div>
              <!-- /.card-header -->

              <?php
                if(isset($_GET['mid'])){

                  $mid = $_GET['mid'];
                  $result = $dbcon->query("SELECT * FROM manufacturer WHERE m_id=$mid");
                  $row = $result->fetch_assoc();

                }
              ?>
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputID"><?= !isset($row['m_id'])? "": 'Manufacturer ID'; ?></label>
                    <input type="text" name="m_id" class="form-control" id="inputID" placeholder="Enter ID" value="<?= isset($row['m_id'])? $row['m_id']: ''; ?>" <?= !isset($row['m_id'])? "hidden": ''; ?>>
                  </div>
                  <div class="form-group">
                    <label for="inputName">Manufacturer Name</label>
                    <input type="text" name="m_name" class="form-control" id="inputName" placeholder="Enter Name" value="<?= isset($row['m_name'])? $row['m_name']: ''; ?>">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Manufacturer Address</label>
                    <input type="text" name="m_address" class="form-control" id="inputAddress" placeholder="Enter address" value="<?= isset($row['m_address'])? $row['m_address']: ''; ?>">
                  </div>
                  <div class="form-group">
                    <label for="inputContact">Manufacturer Contact</label>
                    <input type="text" name="m_contact" class="form-control" id="inputContact"  placeholder="Enter contact" value="<?= isset($row['m_contact'])? $row['m_contact']: ''; ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <?php
                if($_POST){
                  extract($_POST);

                  if(isset($mid)){    // code for update form data
                    $sql = "UPDATE manufacturer SET m_id=$m_id, m_name='$m_name', m_address='$m_address', m_contact='$m_contact' WHERE m_id=$mid";

                    $dbcon->query($sql);
                    if($dbcon->affected_rows>0){
                      header("Location:manufacturers.php");
                    }
                  } else{   // code for insert form data
                    $sql = "INSERT INTO manufacturer VALUES(NULL, '$m_name', '$m_address', '$m_contact')";
                    $dbcon->query($sql);
                    if($dbcon->affected_rows>0){
                      echo "<h4 class='text-success p-4 bg-primary'>Success</h4>";
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

<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
