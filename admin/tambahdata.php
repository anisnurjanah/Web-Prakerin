<?php
include '../koneksi.php';
            $nis            = $_POST['nis'];
			$nama		= $_POST['nama'];
			$jenis_kl		= $_POST['jenis_kl'];
            $kelas			= $_POST['kelas'];
			$jurusan		= $_POST['jurusan'];
			$tel	= $_POST['tel'];
            $alamat	= $_POST['alamat'];
			$nama_inst	= $_POST['nama_inst'];
            $bidang	= $_POST['bidang'];
			$alamat_inst	= $_POST['alamat_inst'];
			$tel_inst	= $_POST['tel_inst'];
            
			$sql = "INSERT INTO siswa (nis, nama,
            jenis_kl, kelas, jurusan, tel, alamat, nama_inst, bidang, alamat_inst, tel_inst)
VALUES ('$nis', '$nama', '$jenis_kl','$kelas', '$jurusan','$tel', '$alamat',
'$nama_inst','$bidang', '$alamat_inst', '$tel_inst')";
            if ($conn->query($sql) === TRUE) {
                echo '<script type="text/javascript">'; 
echo 'alert("Data berhasil ditambah!");'; 
echo 'window.location.href = "dataprakerin.php";';
echo '</script>';
               }
               else{
                echo "ERROR: Data Gagal Ditambah!". mysqli_error($conn);
               }
?>