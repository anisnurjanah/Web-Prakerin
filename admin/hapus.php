<?php
//include('dbconnected.php');
include('../koneksi.php');

$nis = $_GET['nis'];

//query update
$query = mysqli_query($conn,"DELETE FROM `siswa` WHERE nis = '$nis'");

if ($query) {
    echo '<script type="text/javascript">'; 
echo 'alert("Data berhasil dihapus!");'; 
echo 'window.location.href = "dataprakerin.php";';
echo '</script>'; 
}
else{
 echo "ERROR, data gagal dihapus!". mysqli_error($conn);
}

//mysql_close($host);
?>