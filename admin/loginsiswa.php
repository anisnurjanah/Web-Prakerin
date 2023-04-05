<?php
session_start();
include '../koneksi.php';

if(isset($_POST['login'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
     
     // cek akun ada apa tidak
    $cek = mysqli_query($conn, "select * from siswa where nis='$nis' and nama='$nama'");

    if(mysqli_num_rows($cek) > 0){
      $a = mysqli_fetch_object($cek);
      $_SESSION['stat_login'] = true;
      $_SESSION['id'] = $a->id;
      echo '<script>window.location="utama.php"</script>';
    }else{
      echo '<script>alert("Gagal, Password atau Username yang anda masukan salah!")</script>';
    }
  }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Tab Icon -->
    <link rel="icon" href="../asset/gambar/logosmkip.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.0-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/admin.css">

    <title>SIPRAKERIN | LOGIN</title>
</head>

<body>
    <div class="container">
        <br><center>
        <div class="card" style="width: 24rem; border: none; margin-top: 5%;">
            <img src="../asset/gambar/logosmkip.png" style="width: 60%; height: 60%; display: block; margin-left: auto;
    margin-right: auto;">
            <div class="card-body">
                <center><h3>SELAMAT DATANG DI WEBSITE DATA PRAKERIN</h3></center>
                <form action="" method="post">
                    <div class="form-group mt-2">
                        <input type="text" name="nis" class="form-control" placeholder="Masukan NIS" style="border-radius: 40px;">
                    </div>
                    <div class="form-group mt-2">
                        <input type="password" name="nama" class="form-control" placeholder="Password" style="border-radius: 40px;">
                    </div>
                    <button type="submit" name="login" class="btn-info form-control mt-2" style="border-radius: 40px;" >LOGIN</button>
                    <br><button  style="border: none; border-radius:20px;"><a href="formulir2.php" style="font-weight: bold;"> SIGN UP (DAFTAR) </a></button>
                </form>
            </div>
        </div></center>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>