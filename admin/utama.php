<?php
session_start();
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Tab Icon -->
    <link rel="icon" href="../asset/gambar/logosmk2.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.0-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../asset/style.css">
	
    <title>SIPRAKERIN | HOME</title>

</head>
<body>
<header>
        <nav>
        <div class="logo">SMK IGASAR PINDAD BANDUNG</div>
        <div class="wrapper">
            <div class="menu">
            <ul>
                    <li><a href="utama.php">Home</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="dataprakerin.php">Data Prakerin</a></li>
                    <li><a href="formulir.php">Formulir</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="logout.php" style="color: white; background-color: red; border-radius: 10px; font-weight: bold; border: none; margin-top: 20px; padding: 5px 10px 5px 10px;">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="wrapper">
</header>
<br>
<main>
  <div class="container">
    <img src="../asset/gambar/logosmkip.png" style='width: 20%; height: 20%; display: block; margin-left: auto;
    margin-right: auto;'>
    <br>
  <section class="content">
   <div class="box">
    <h3 style="font-family: Trebuchet MS; font-size: 20px; font-weight: bold; margin-bottom: 10px; color: white; text-align: center;">
    DATA SISWA </h3><br>
    <a href="siswa.php" style="font-family: times new roman;">More info <i class="fas fa-arrow-circle-right"></i></a></div>
    <div class="box">
    <h3 style="font-family: Trebuchet MS; font-size: 20px; font-weight: bold; margin-bottom: 10px; color: white; text-align: center;">
    DATA JURUSAN </h3><br>
    <a href="jurusan.php" style="font-family: times new roman;">More info <i class="fas fa-arrow-circle-right"></i></a></div>
    <div class="box">
    <h3 style="font-family: Trebuchet MS; font-size: 20px; font-weight: bold; margin-bottom: 10px; color: white; text-align: center;">
    DATA INSTANSI/PERUSAHAAN </h3><br>
    <a href="instansi.php" style="font-family: times new roman;">More info <i class="fas fa-arrow-circle-right"></i></a></div>
</div>
  </section>
</div>
</main>
</html>