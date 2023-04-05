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
	
    <title>SIPRAKERIN | PROFILE</title>

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
<main>
    <div class="container">
        <div class="card" style="border: none; border-radius: 20px; padding: 20px;">
        <h2> Data Jurusan </h2>
        <p style='font-family: times new roman;
  font-size: large; text-align: justify;'> 
SMK IGASAR PINDAD Bandung memiliki 5 Bidang Kompetensi Keahlian, diantaranya sebagai berikut: <br>
  <br>1.  Bidang Keahlian Teknologi dan Rekayasa memiliki 3 Kompetensi Keahlian.<br><br>a.  Teknik Pemesianan (TP) dibuka pada tahun 1976
  <br>b. Teknik Kendaraan Ringan Otomotif (TKRO) dibuka pada tahun 1995<br>c. Teknik Bisnis Sepeda Motor (TBSM) dibuka pada tahun 2014.<br><br>
  2.Bidang Keahlian Teknologi Informasi dan Komunikasi, memiliki 2 Kompetensi Keahlian.
  <br><br>a. Teknik Komputer dan Jaringan (TKJ) yang dibuka pada tahun 2017,
  <br>b. Kompetensi Keahlian Rekayasa Perangkat Lunak (RPL) dibuka pada tahun 2012.
</p></div>
</div>
</main>
</body>
</html>