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
      <div id="content">
        <article class="card" style="border-radius: 20px; padding: 20px; margin-bottom: 10px;">
      <h1>Sejarah</h1>
        <img src="../asset/gambar/1.jpeg" style='width: 800px; height: 400px; display: block; margin-left: auto; margin-right: auto;'>
        <br>
        <p style='font-family: times new roman;
  font-size: medium; text-align: justify;'>Pada Tahun 1966 Sekolah Menengah Industri Militer (SMIM) didirikan oleh PINDAD yang dibina oleh Yayasan Pendidikan PINDAD, SMIM diganti nama menjadi Sekolah Teknologi Menengah (STM) Igasar Pindad.
  Tahun 1976 IGASAR PINDAD mendirikan Yayasan yang diberi nama Yayasan Sadhana Bhakti (YSB). Mulai saat itu pula YSB sebagai pengelola SMK/STM IGASAR PINDAD. Mulai tahun 2008 YSB diganti menjadi Yayasan Pendidikan' Igasar Pindad (YPIP), sampai sekarang.
  <br>SMK IGASAR PINDAD Bandung memiliki 5 Bidang Kompetensi Keahlian, diantaranya sebagai berikut: <br>
  <br>1.  Bidang Keahlian Teknologi dan Rekayasa memiliki 3 Kompetensi Keahlian.<br><br>a.  Teknik Pemesianan (TP) dibuka pada tahun 1976
  <br>b. Teknik Kendaraan Ringan Otomotif (TKRO) dibuka pada tahun 1995<br>c. Teknik Bisnis Sepeda Motor (TBSM) dibuka pada tahun 2014.<br><br>
  2.Bidang Keahlian Teknologi Informasi dan Komunikasi, memiliki 2 Kompetensi Keahlian.
  <br><br>a. Teknik Komputer dan Jaringan (TKJ) yang dibuka pada tahun 2017,
  <br>b. Kompetensi Keahlian Rekayasa Perangkat Lunak (RPL) dibuka pada tahun 2012.</p>
  </article>
      <article class="card" style="border-radius: 20px; padding: 20px;">
          <h1>Visi dan Misi</h1>
          <h2> Visi </h2>
          <p style='font-family: times new roman;
  font-size: medium; text-align: center;'>
  Menjadikan satuan Pendidik teknik yang unggul dalam mengembangkan Kompetensi, Disiplin, dan Kejujuran.</p>
          <h2> Misi </h2>
          <p style='font-family: times new roman;
  font-size: medium; text-align: justify;'> 1. Melaksanakan kurikulum melalui pembelajaran dan penilaian berbasis kompetensi, berbasis wirausaha, berbasis akhlaq mulia dan berwawasan lingkungan.
          <br>2. Menumbuhkan semangat kreatifitas dan kompetitif kepada seluruh warga sekolah.
          <br>3. Mengembangkan potensi peserta didik melalui kegiatan ekstrakurikuler dan pembinaan kedisiplinan.</p>
        </article>
      </div>
      <aside>
        <article class="profile card" style="border-radius: 20px;">
        <br>
          <figure>
            <center><img src="../asset/gambar/logosmkip.png" width="70%" height="70%"></center>
            <figcaption style="text-align:center; font-size: small; margin-top: 5px; font-fmaily: Trebuchet MS; font-weight:bold;">Logo Sekolah</figcaption>
          </figure>
          <p style='font-family: times new roman; font-size: medium; text-align: center; margin-bottom: 0px;'>
          Jalan Cisaranten Kulon Nomor 17 Bandung 40293 Telp. (022) 7800587<p>
            <p style="font-family: Trebuchet MS; font-weight:bold; text-align: center; font-size: large;  margin-bottom: 0px;">Motto:</p>
            <p style='font-family: times new roman; font-size: medium; text-align: center;'>
            Membangun Kebersamaan Meraih Prestasi</p>
            <label style="font-family: Trebuchet MS; font-weight:bold; text-align: center; font-size: large;  margin-bottom: 0px;">
             MEDIA </label>
             <center><img src="../asset/gambar/1.jpeg" width="70%" height="70%" style="margin-bottom: 5%;"></center>
             <center><img src="../asset/gambar/2.jpg" width="70%" height="70%" style="margin-bottom: 5%;"></center>
             <center><img src="../asset/gambar/3.jpg" width="70%" height="70%" style="margin-bottom: 5%;"></center>
             <center><img src="../asset/gambar/4.jpg" width="70%" height="70%" style="margin-bottom: 5%;"></center>
             <center><img src="../asset/gambar/6.jpg" width="70%" height="70%" style="margin-bottom: 5%;"></center>
           </article>
      </aside>
    </main>
</body>
</html>