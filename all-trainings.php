<?php session_start()?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>189074054 - All Trainings</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
  <?php include "bars/sidebar.php"; ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include "bars/topbar.php"; ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Trainings</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Manage Trainings</a></li>
              <li class="breadcrumb-item active" aria-current="page">All Trainings</li>
            </ol>
          </div>

          
             <!-- All Trainings -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">All Trainings</h6>
                  <a class="m-0 float-right btn btn-danger btn-sm" href="add-training.php">+ Add New Training </a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>No. of Participants</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>No. of Participants</th>
                        <th></th>
                      </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>01</td>
                        <td>Ipsum lorem</td>
                        <td>Ipsum Lorem</td>
                        <td>Ipsum Lorem</td>
                        <td>Ipsum Lorem</td>
                        <td>
                        <div class="btn-group dropup">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                         Actions 
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </div>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
         
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <?php include "bars/footer.php"; ?>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script> 
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
 
  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
</body>

</html>