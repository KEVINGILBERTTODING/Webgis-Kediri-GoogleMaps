<?php
include('header3.php');
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
  header("location:index.php");
}
$nama = $_SESSION["nama"];
?>
<?php
$user = $_SESSION['user'];
if (isset($_POST['update']) and !empty($_POST['update'])) {
  $ret_val = $obj->updatePoint();
  if ($ret_val == 1) {
    echo '<script type="text/javascript">';
    echo 'alert("Record Updated Successfully");';
    echo 'window.location.href = "read2.php";';
    echo '</script>';
  }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <script src="jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCns0o8yq9Q6Z3sskLNzV6hfaPilFI5twU&callback=initMap">

  </script>

  <script>
    var map;
    var myCenter = new google.maps.LatLng(-7.7768, 112.1313);
    var marker;
    var awal = 0;

    var mapProp = {
      center: myCenter,
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    function initialize() {

      map = new google.maps.Map(document.getElementById("petaku"), mapProp);

      google.maps.event.addListener(map, 'click', function(event) {

        if (awal == 0) {
          placeMarker(event.latLng);
        } else {
          changeMarker(event.latLng);
        }
        awal = 1;

        setLatLng(event.latLng);
      });

    }

    function setLatLng(lokasi) {



      $("#lat").val(lokasi.lat());
      $("#lng").val(lokasi.lng());

    }

    function placeMarker(location) {
      marker = new google.maps.Marker({
        position: location,
        map: map,
      });
    }

    function changeMarker(location) {
      marker.setPosition(location);
    }
  </script>

  <title>Create New Data</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="shortcut icon" href="../assets/logo2.png">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top" onload="initialize()">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="add_user.php">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user-cog"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Kab. Kediri</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link" href="read_user.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Users</span></a>
      </li>

      <!-- Divider -->

      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Utilities
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Interface:</h6>

            <a class="collapse-item" href="read.php">Populasi Ternak Sapi</a>
            <a class="collapse-item" href="read2.php">Peternakan Sapi</a>

          </div>
        </div>
      </li>

      <hr class="sidebar-divider">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link" href="../map/map_user.php">
          <i class="fas fa-fw fa-map-marker-alt"></i>
          <span>Map</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nama; ?></span>
                <img class="img-profile rounded-circle" src="../assets/profile.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><b>Create New Data</b></h1>
          <!-- Basic Card Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">New Data</h6>
            </div>


            <div class="card-body">
              <div id="petaku" style="width:1580px;height:400px" class="mb-3"></div>
              <form class="user" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control" id="id" value="<?= $user->id ?>" placeholder="ID" name="id" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control" id="nama" value="<?= $user->nama ?>" placeholder="Nama Peternakan" name="nama" required>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2 mt-2">Kategori peternakan:<span style='color:red'>*</span></label>
                  <div class="col-sm-5 mt-2">
                    <select name="jenis" id="jenis">
                      <option value="<?= $user->jenis ?>"><?= $user->jenis ?></option>
                      <option value="Sapi">Sapi</option>
                      <option value="Unggas">Unggas</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control" value="<?= $user->alamat ?>" id="alamat" placeholder="Alamat Peternakan" name="alamat" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control" value="<?= $user->lat ?>" id="lat" placeholder="Latitude" name="lat" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control" value="<?= $user->lng ?>" id="lng" placeholder="Longitude" name="lng" required>
                </div>
                <input type="submit" class="btn btn-success" name="update" value="Update">
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>

      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Kevin Gilbert Toding 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>