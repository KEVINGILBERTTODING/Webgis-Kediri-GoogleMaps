<?php
function pdo_connect_mysql()
{
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'webgiskediri';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to database!');
    }
}
function template_header($title)
{
    echo <<<EOT
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
    <link href="bs5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logo2.png">
    <link rel="stylesheet" href="icon/css/all.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/responsive.css">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    
	<nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/logo1.png" height="90px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav nav-pills">
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link active bg-active link-navbar" href="read.php">Data dan Informasi</a>
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
	<div class="container">
EOT;
}
function template_footer()
{
    echo <<<EOT
    
        
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
                <a href="profile.php" class="link-navbar">About Us</a><br>
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
    </div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bs5/dist/js/bootstrap.bundle.js"></script>
    <script src="js/onscroll.js"></script>

</body>

</html>
EOT;
}
