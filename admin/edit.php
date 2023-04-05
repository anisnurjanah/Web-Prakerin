<?php
session_start();
include '../koneksi.php';
$nis = $_GET['nis'];
ob_start();
$select = mysqli_query($conn, "SELECT * FROM siswa WHERE nis='$nis'") or die(mysqli_error($conn));
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
	
    <title>SIPRAKERIN | EDIT</title>

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
<?php
			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0)
			{
				echo '
					<script type="text/javascript">
							swal({
							  title: "EMPTY DATA",
							  text: "NIS Tidak Diketemukan!",
							  type: "warning"
							}, 
							setTimeout(function()
							{window.location.href = "dataprakerin.php";}, 3000))
					</script>
					';

			//jika hasil query > 0
			}
			else
			{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		?>
<section class="card-edit">
    <center><h1> FORM EDIT DATA </h1></center>
<form action="editdata.php" method="post">
						<div class="item form-group">
							<input type="text" name="nis" class="form-control" size="4" placeholder="Masukkan NIS" value="<?php echo $data['nis']; ?>" readonly="readonly" required="required">
						</div>
						<div class="item form-group">
							<input type="text" name="nama" class="form-control" size="4" placeholder="Masukkan Nama Siswa" value="<?php echo $data['nama']; ?>"required="required">
						</div>
						<div class="item form-group">
							<input type="text" name="jenis_kl" class="form-control" size="4" placeholder="Laki-Laki atau Perempuan" value="<?php echo $data['jenis_kl']; ?>" required="required">
						</div>
                        <div class="item form-group">
							<input type="text" name="kelas" class="form-control" size="4" placeholder="Masukkan Kelas" value="<?php echo $data['kelas']; ?>" required="required">
						</div>
						<div class="item form-group">
							<input type="text" name="jurusan" class="form-control" size="4" placeholder="Masukkan Jurusan" value="<?php echo $data['jurusan']; ?>" required="required">
						</div>
						<div class="item form-group">
									<input type="text" name="nama_inst" class="form-control" placeholder="Masukkan Nama Instansi" value="<?php echo $data['nama_inst']; ?>" required="required">
						</div>
						<div class="item form-group">
									<input type="text" name="alamat_inst" class="form-control" placeholder="Masukkan Alamat Instansi" value="<?php echo $data['alamat_inst']; ?>" required="required">
						</div>
                        <div class="item form-group">
									<input type="text" name="tel_inst" class="form-control" placeholder="Masukkan No Telepon Instansi" value="<?php echo $data['tel_inst']; ?>" required="required">
						</div>
                        <div class="item form-group">
								<center><input type="submit" name="submit" class="btn btn-primary" value="UPDATE">
        </center>
							</div>
                        </form>
</section>
</div>
</body>
</html>