<?php
session_start();
require('db_class.php');
$obj = new Db_Class();
?>
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
            <a class="nav-link  link-navbar" href="index.php">Beranda</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link link-navbar" href="profile.php">Profile</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link  active bg-active link-navbar" href="show.php">Data dan Informasi</a>
          </li>

          <li class="nav-item me-2">
            <a class="nav-link  link-navbar" href="input.php">Input Data</a>
          </li>

          <li class="nav-item me-2">
            <a class="nav-link link-navbar" href="map.php">Peta</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link btn-custom rounded" id="btn-sign">Login</a>
          </li>
        </ul>


      </div>
    </div>
  </nav>