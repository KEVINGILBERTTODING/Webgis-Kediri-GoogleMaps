<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="assets/logo2.png">
    <link href="bs5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="icon/css/all.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/responsive.css">

    <title>Kab. Kediri</title>
</head>

<body>

    <!--============================================================================ NAVBAR ==========================================================-->
    <nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/logo1.png" height="90px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav nav-pills">
                    <li class="nav-item me-2">
                        <a class="nav-link active bg-active link-navbar" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="read.php">Data dan Informasi</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="map/index.php">Peta</a>
                    </li>

                    <li class="nav-item">
                        <a href="admin/index.php" class="nav-link btn-custom rounded" id="btn-sign">Login</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>





    <!--============================================================================4. Product Manager ==========================================================-->

    <div class="container">
        <br><br><br><br><br><br><br><br>
        <div class="row mb-5">

            <div class="col-lg-12 d-block d-lg-none">
                <center>
                    <img src="assets/vector-productmanager.svg" width="100%">
                </center>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <img src="assets/vector-productmanager.svg" width="100%">
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <h1 class="h5 bold-2 mt-3">Web GIS Kab. Kediri</h1>
                    <h1 class="bold-3">Selamat Datang</h1>
                    <div class="desc mt-5 mb-2">
                        <p>
                            WebGIS ini dirancang dan dibuat oleh <b>Kevin Gilbert Toding</b> dengan
                            tujuan untuk mendistribusikan, mempublikasikan, mengintegrasikan, mengkomunikasikan dan menyediakan informasi dalam bentuk teks, peta digital serta menjalankan fungsi-fungsi analisis dan query
                            yang terkait dengan GIS melalui jaringan internet.
                            Fasilitas yang tersedia:

                        </p>
                    </div>
                    <div class="d-flex desc">
                        <img src="assets/vector-check.svg" width="35px" class="me-3">
                        <p class="mt-3">
                            Menampilkan Peta digital Kab. Kediri dengan
                            tampilan yang lebih menarik.
                        </p>
                    </div>
                    <div class="d-flex desc">
                        <img src="assets/vector-check.svg" width="35px" class="me-3">
                        <p class="mt-3">
                            Terdapat beberapa tools yang akan mempermudah dalam mengakses data yang
                            diperlukan.
                        </p>
                    </div>
                    <div class="d-flex desc">
                        <img src="assets/vector-check.svg" width="35px" class="me-3">
                        <p class="mt-3">
                            Menampilkan data dan Informasi yang selalu terupdate.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <br>
    <!--============================================================================2. Feature ==========================================================-->
    <div class="position-relative">
        <img src="assets/bg-feature.svg" width="100%" class="bg-feature">
        <div class="container position-relative">

            <div class="row justify-content-center">
                <h1 class="h2 bold-3 my-5 max-width-5x text-center">Alat untuk mempermudah melihat informasi pada peta</h1>
            </div>

            <div class="row mt-4">
                <div class="col-lg-3">
                    <div class="card border-0">
                        <div class="card-body align">
                            <div class="box bg-purple mb-4">
                                <i class="fas fa-search-plus text-white ms-1"></i>
                            </div>
                            <h5 class="card-title bold-2 mb-3">Memperbesar & memperkecil</h5>
                            <p class="card-text">
                                Berfungsi untuk memperbesar dan mengecilkan tampilan pada peta

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0">
                        <div class="card-body align">
                            <div class="box bg-yellow mb-4">
                                <i class="fas fa-ruler text-white"></i>
                            </div>
                            <h5 class="card-title bold-2 mb-3">Pengukuran</h5>
                            <p class="card-text">Berfungsi untuk mengukur jarak pada peta, satuan km</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0">
                        <div class="card-body align">
                            <div class="box bg-red mb-4">
                                <i class="fas fa-binoculars text-white"></i>
                            </div>
                            <h5 class="card-title bold-2 mb-3">Pencarian</h5>
                            <p class="card-text">Berfungsi untuk mencari nama kecamatan pada peta</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0">
                        <div class="card-body align">
                            <div class="box bg-blue mb-4">
                                <i class="fas fa-layer-group text-white"></i>
                            </div>
                            <h5 class="card-title bold-2 mb-3">Agenda</h5>
                            <p class="card-text">
                                Berfungsi untuk menampilkan keterangan mengenai simbol-simbol yang digunakan peta
                            </p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row my-5 justify-content-center">
                <a href="map/index.php" class="btn btn-custom p-3 rounded shadow width-2x bold-2">Lihat Peta</a>
            </div>

        </div>
    </div>
    <!--============================================================================7. Marketin Strategis ==========================================================-->
    <div class="container position-relative">

    </div>

    <br><br><br>
    <!--============================================================================8. Footer==========================================================-->
    <div class="container">
        <hr class="my-5">
        <div class="row mb-5">

            <div class="col-lg-3">
                <a href="#">
                    <img src="assets/logo1.png" height="50px">
                </a>
                <h6><br></h6>
            </div>
            <div class="col-lg-3">
                <h5>Quick Links</h5>
                <br><br>
                <a href="#" class="link-navbar">About Us</a><br>
                <a href="#" class="link-navbar">Blog</a><br>
                <a href="#" class="link-navbar">Contact</a><br>
                <a href="#" class="link-navbar">FAQ</a><br>
                <br>
            </div>
            <div class="col-lg-3">
                <h5>Legal Stuff</h5>
                <br><br>
                <a href="#" class="link-navbar">Disclaimer</a><br>
                <a href="#" class="link-navbar">Financing</a><br>
                <a href="#" class="link-navbar">Privacy Policy</a><br>
                <a href="#" class="link-navbar">Terms of Service</a><br>
                <br>
            </div>
            <div class="col-lg-3">
                <h6>2021 <b>Kevin Gilbert Toding</b>. Made with ❤️ using bootsrap and QGIS 3 Hannover.</h5>
                    <br>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukkan no Handphone anda" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-custom rounded shadow">Daftar Sekarang</button>
                    </form>
            </div>

        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bs5/dist/js/bootstrap.bundle.js"></script>
    <script src="js/onscroll.js"></script>

</body>

</html>