<?php session_start() ?>
<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>189074054 - All Venues</title>
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
            <h1 class="h3 mb-0 text-gray-800">All Venues</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Manage Venues</a></li>
              <li class="breadcrumb-item active" aria-current="page">All Venues</li>
            </ol>
          </div>


          <!-- All Venues -->
          <div class="col-lg-12">
            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">All Venues</h6>
                <a class="m-0 float-right btn btn-danger btn-sm" href="add-venue.php">+ Add New Venue </a>
              </div>
              <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                  <?php
                  $getVenue = $pdo->prepare("SELECT * FROM venues");
                  $getVenue->execute();
                  ?>
                  <thead class="thead-light">
                    <tr>
                      <th>S/N</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>S/N</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>

                    <?php
                    while ($row = $getVenue->fetch()) {
                      $venue_id = $row['venue_id'];
                      $name = $row['name'];
                      $description = $row['description'];
                      echo "<tr>";
                      echo "<td>$venue_id</td>";
                      echo "<td>$name</td>";
                      echo "<td>$description</td>";
                      echo "<td><a href='edit-venue.php?edit_venue=$venue_id'><button class='btn btn-primary'>Edit</td></button>";
                      echo "<td><a href='all-venues.php?delete=$venue_id'><button class='btn btn-danger'>Delete</td></a></button>";
                      echo "</tr>";
                    }
                    ?>
                    <div class="btn-group dropup">
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Actions
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="edit-venue.php?edit_venue=<?= $venue_id ?>">Edit</a>
                        <a class="dropdown-item" href="all-venues.php?delete=<?= $venue_id ?>">Delete</a>
                      </div>
                    </div>
                    </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <?php
          if (isset($_GET['delete'])) {
            $delVenue = $_GET['delete'];
            $sql = $pdo->prepare("DELETE FROM venues WHERE venue_id= $delVenue");
            $sql->execute();
            header("Location:./all-venues.php");
          }

          ?>
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
    $(document).ready(function() {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
</body>

</html>