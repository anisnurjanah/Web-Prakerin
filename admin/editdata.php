<?php
include '../koneksi.php';
            $nis            = $_POST['nis'];
			$nama		= $_POST['nama'];
            $jenis_kl		= $_POST['jenis_kl'];
			$kelas			= $_POST['kelas'];
			$jurusan		= $_POST['jurusan'];
			$nama_inst	= $_POST['nama_inst'];
			$alamat_inst	= $_POST['alamat_inst'];
			$tel_inst	= $_POST['tel_inst'];
            ?>

		<?php
		
			//melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
			
			$sql = mysqli_query($conn, "UPDATE siswa SET 
			nis='$nis', nama='$nama', jenis_kl='$jenis_kl', kelas='$kelas', jurusan='$jurusan', nama_inst='$nama_inst',
			alamat_inst='$alamat_inst', tel_inst='$tel_inst' WHERE nis='$nis'") 
			
			or die(mysqli_error($conn));

		
			//jika query menghasilkan nilai > 0 maka eksekusi script di bawah
			if ($sql) {
                echo '<script type="text/javascript">'; 
echo 'alert("Data berhasil diubah!");'; 
echo 'window.location.href = "dataprakerin.php";';
echo '</script>';
               }
               else{
                echo "ERROR: Data Gagal Diubah!". mysqli_error($conn);
               }
?>