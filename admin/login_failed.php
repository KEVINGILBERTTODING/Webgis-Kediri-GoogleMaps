<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link href="../bs5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../icon/css/all.min.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/theme.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">


    <title>Kab. Kediri</title>
</head>

<body>

    <!--============================================================================ NAVBAR ==========================================================-->
    <nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../assets/logo1.png" height="90px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav nav-pills">
                    <li class="nav-item me-2">
                        <a class="nav-link active bg-active link-navbar" href="../index.php">Beranda</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="../profile.php">Profile</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="../read.php">Data dan Informasi</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="../map/index.php">Peta</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.php" class="nav-link btn-custom rounded" id="btn-sign">Login</a>
                    </li>
                </ul>


            </div>
        </div>

    </nav>
    <br><br>


    <!--============================================================================4. Product Manager ==========================================================-->
    <br><br><br>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login as Admin</h1>
                                    </div>
                                    <form class="user" method="POST" action="login_action.php">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" value="Login" class="btn btn-primary btn-user btn-block">

                                        </a>


                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <p style="color: red;">Username dan password salah.</p>
                                    </div>
                                    <div class="text-center">
                                        <p style="font-size: 15px;">Masuk sebagai <b>admin</b> untuk mendapatkan hak akses penuh.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    </div>
    <br><br>
    <!--============================================================================8. Footer==========================================================-->
    <div class="container">
        <hr class="my-5">
        <div class="row mb-5">

            <div class="col-lg-3">
                <a href="#">
                    <img src="../assets/logo1.png" height="50px">
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
    <script src="../bs5/dist/js/bootstrap.bundle.js"></script>
    <script src="../js/onscroll.js"></script>

</body>

</html>