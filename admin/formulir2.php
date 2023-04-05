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
    <link rel="stylesheet" type="text/css" href="../asset/style.css?v2">
	
    <title>SIPRAKERIN | FORMULIR</title>

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
<div class="container">
<section class="card-edit">
    <center><h1> FORM SURAT PRAKERIN</h1></center>
<form action="ekspor.php" method="post">
						<div class="item form-group"><label style="font-family: Trebuchet MS; font-weight: bold;"> Nomor Induk Siswa (NIS) </label>
							<input type="text" name="nis" class="form-control" size="4" placeholder="Masukkan NIS" required="required">
						</div>
						<div class="item form-group"><label style="font-family: Trebuchet MS; font-weight: bold;"> Nama Lengkap </label>
							<input type="text" name="nama" class="form-control" size="4" placeholder="Masukkan Nama Siswa" required="required">
						</div>
						<div class="item form-group"><label style="font-family: Trebuchet MS; font-weight: bold;"> Jenis Kelamin </label><br>
                        <div class="btn-group" data-toggle="buttons">
										<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
											<input type="radio" class="join-btn" name="jenis_kl" value="Laki-Laki" required="required">Laki-Laki
										</label>
										<label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
											<input type="radio" class="join-btn" name="jenis_kl" value="Perempuan" required="required">Perempuan
										</label>
									</div></div>
                  <div class="item form-group"><label style="font-family: Trebuchet MS; font-weight: bold;"> Kelas </label>
									<select name="kelas" class="form-control" required="required">
										<option value="">Pilih Kelas</option>
                    <option value="XI-TP-1">XI TP 1</option>
                    <option value="XI-TP-2">XI TP 2</option>
                    <option value="XI-TP-3">XI TP 3</option>
										<option value="XI-TKR-1">XI TKRO 1</option>
                    <option value="XI-TKR-2">XI TKRO 2</option>
                    <option value="XI-TKR-3">XI TKRO 3</option>
										<option value="XI-TKJ-1">XI TKJ 1</option>
                    <option value="XI-TKJ-2">XI TKJ 2</option>
                    <option value="XI-TKJ-3">XI TKJ 3</option>
                    <option value="XI-RPL">XI RPL</option>
										<option value="XI-TBSM-1">XI TBSM 1</option>
                    <option value="XI-TBSM-2">XI TBSM 2</option>
       							
									</select>
						</div>
            <div class="item form-group"><label style="font-family: Trebuchet MS; font-weight: bold;"> Jurusan </label>
									<select name="jurusan" class="form-control" required="required">
										<option value="">Pilih Jurusan</option>
										<option value="Teknik Pemesinan">Teknik Pemesinan</option>
										<option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
										<option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
										<option value="Teknik & Bisnis Sepeda Motor">Teknik & Bisnis Sepeda Motor</option>
									</select>
						</div>
            <div class="item form-group"><label style="font-family: Trebuchet MS; font-weight: bold;"> No. Telepon </label>
									<input type="text" name="tel" class="form-control" placeholder="Masukkan No Telepon" required="required">
						</div>
                        <div class="item form-group"><label style="font-family: Trebuchet MS; font-weight: bold;"> Alamat </label>
									<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" required="required">
						</div>
						<div class="item form-group"><label style="font-family: Trebuchet MS; font-weight: bold;"> Nama Instansi/Perusahaan </label>
									<input type="text" name="nama_inst" class="form-control" placeholder="Masukkan Nama Instansi" required="required">
						</div>
            <div class="item form-group"><label style="font-family: Trebuchet MS; font-weight: bold;"> Bidang Instansi/Perusahaan </label>
									<input type="text" name="bidang" class="form-control" placeholder="Masukkan Bidang Instansi" required="required">
						</div>
						<div class="item form-group"><label style="font-family: Trebuchet MS; font-weight: bold;"> Alamat Instansi/Perusahaan </label>
									<input type="text" name="alamat_inst" class="form-control" placeholder="Masukkan Alamat Instansi" required="required">
						</div>
                        <div class="item form-group"><label style="font-family: Trebuchet MS; font-weight: bold;"> No. Telepon Instansi/Perusahaan </label>
									<input type="text" name="tel_inst" class="form-control" placeholder="Masukkan No Telepon Instansi" required="required">
						</div>
                        <div class="item form-group">
								<center><input type="submit" name="submit" class="btn btn-primary" value="Simpan">
        </center>
							</div>
                        </form>
</section>
</div>
</body>
</html>