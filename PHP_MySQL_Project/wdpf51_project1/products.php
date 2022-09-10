<?php
session_start();
if (!isset($_SESSION['user_email'])) {
  header("Location:index.php");
}

include("includes/dbcon.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>All Products</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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
              <h1>All Products</h1>
            </div>
            <div class="col-sm-2">
              <a href="product_entry.php" class="btn btn-danger"><i class="fa fa-plus"></i> New Product</a>
            </div>
            <div class="col-sm-5">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">All Products</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <colgroup>
                    <col width="10%">
                    <col width="20%">
                    <col width="25%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="15%">
                  </colgroup>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Details</th>
                      <th>Price</th>
                      <th>Thumbnail</th>
                      <th>Manu_D</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $result = $dbcon->query("SELECT * FROM products");
                    while ($row = $result->fetch_assoc()) {
                    ?>
                      <tr>
                        <td><?php echo $row['pid'] ?></td>
                        <td><?php echo $row['pname'] ?></td>
                        <td><?php echo $row['pdetails'] ?></td>
                        <td><?php echo $row['pprice'] ?></td>
                        <td>
                          <img src="dist/img/pthumbs/<?php echo $row['pthumb'] ?>" alt="" height="50px">
                        </td>
                        <td><?php echo $row['manu_id'] ?></td>
                        <td align="center">
                          <button type="button" class="btn btn-flat p-1 btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            Action
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item edit_data" href="product_entry.php?pid=<?php echo $row['pid'] ?>"><span class="fa fa-edit text-primary"></span> Edit</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item delete_data" href="product_delete.php?pid=<?php echo $row['pid'] ?>"><span class="fa fa-trash text-danger"></span> Delete</a>
                          </div>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Details</th>
                      <th>Price</th>
                      <th>Thumbnail</th>
                      <th>Manu_ID</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
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
  <!-- DataTables -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- page script -->
  <script>
    $(document).ready(function() {
      $('.delete_data').click(function() {
        _conf("Are you sure to delete Student [<b>" + $(this).attr('data-code') + "</b>] permanently?", "delete_student", [$(this).attr('data-id')])
      })
    })
  </script>
  <script>
    $(function() {
      $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      });
    });
  </script>
</body>

</html>