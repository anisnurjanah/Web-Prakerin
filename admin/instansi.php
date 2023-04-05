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
	
    <title>SIPRAKERIN | DATA</title>

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
<article class="card-body"><form method="GET" action="instansi.php" style="text-align: left;">
		<label style="font-family: Trebuchet MS; font-weight: bold;">Cari Data:</label>
		<input type="text" style="border: none; border-radius: 10px; padding:2px;" name="cari" placeholder="Masukkan Nama Instansi" value="<?php if(isset($_GET['cari'])) { echo $_GET['cari']; } ?>" />
		<button type="submit" style="color: grey; background-color: lightgrey; border-radius: 5px; font-weight: 
        bold; border: none; margin-top: 10px; padding: 5px 10px 5px 10px;"
        value="cari">Cari</button>
</form>
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
}
?>
    <h2> Data Instansi/Perusahaan </h2>
<table class="table table-bordered">
<thead>
    <tr>
        <th>No</th>
        <th>Nama Instansi/Perusahaan</th>
        <th>Bidang</th>
        <th>Alamat</th>
        <th>Telepon</th>
    </tr>
</thead>
<tbody>
    <?php
    $sql = mysqli_query($conn, "SELECT * FROM siswa ORDER BY nis DESC") or die(mysqli_error($conn));
    
    $no = 1;
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $sql = mysqli_query($conn, "SELECT * FROM siswa WHERE nama_inst like '%".$_GET['cari']."%'");			
      }
    while($data = mysqli_fetch_assoc($sql))
    {
        {
            echo '
            <tr>
            <td>'.$no.'</td>
            <td>'.$data['nama_inst'].'</td>
            <td>'.$data['bidang'].'</td>
            <td>'.$data['alamat_inst'].'</td>
            <td>'.$data['tel_inst'].'</td>
           ';
           $no++;}}
    ?>
    </tbody>
</article>
</div>
</body>
</html>