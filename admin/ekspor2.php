<?php
//Jika download plugin mpdf tanpa composer (versi lama)
define('_MPDF_PATH','mpdf/');
include(_MPDF_PATH . "mpdf.php");
$mpdf=new mPDF('utf-8', 'A4', 11, 'Arial');
//Jika download plugin mpdf dengan composer (versi baru)
//require_once __DIR__ . '/vendor/autoload.php';
//$mpdf = new \Mpdf\Mpdf();

//Menggabungkan dengan file koneksi yang telah kita buat
include '../koneksi.php';

$nama_dokumen='Lampiran Surat Prakerin';
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lampiran Surat Prakerin</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
            align: center;
			font-family: arial;
			font-size: 13px;
			text-align:justify;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}

	</style>
</head>
<body>
	<center>
<table class="table table-bordered">
			<tr>
      <td><img src="../asset/gambar/kop.png" width="700" height="150"></td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
		</table>
		<table>
		<tr class="text2">
				<td width="150">Lampiran Surat Nomor</td>
				<td width="300">:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/SMK-IGASAR/V/2023</td>
			</tr>
		</table>
		<table width="700"><tr>
			<td><b><center>DAFTAR NAMA SISWA / SISWI YANG AKAN MELAKSANAKAN<br>
PRAKTEK KERJA INDUSTRI</b></center></tr></td>
		</table>
		<table width="700">
		<tr class="text2">
				<td width="700">NAMA INDUSTRI / INSTANSI  &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
				if(isset($_POST['submit']))
				{
				 echo $_POST['nama_inst'];
				}
				?></td>
			</tr>
		</table>
		<table width="700">
		<tr class="text2">
				<td>ALAMAT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php
	if(isset($_POST['submit']))
	{
	 echo $_POST['alamat_inst'];
	}
	?></td>
			</tr>
		</table><br>
		<table width="700" style="border: 1px solid black;
  border-collapse: collapse;">
<thead style="border-color:black; border: 1px solid black;
  border-collapse: collapse;">
    <tr class="text">
        <th>No</th>
        <th>NAMA SISWA/SISWI</th>
        <th>NIS</th>
        <th>KELAS</th>
        <th>NO HP</th>
    </tr>
</thead>
<tbody style="border-color:black; border: 1px solid black;
  border-collapse: collapse; text-align:center;">
    <?php
    $sql = mysqli_query($conn, "SELECT * FROM siswa ORDER BY nama_inst DESC") or die(mysqli_error($conn));
    
    if(mysqli_num_rows($sql) > 0)
    {
        $no = 1;
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $sql = mysqli_query($conn, "SELECT * FROM siswa WHERE nama_inst like '%".$_GET['cari']."%'");			
          }
        while($data = mysqli_fetch_assoc($sql))
        {
            echo '
            <tr>
            <td>'.$no.'</td>
            <td>'.$data['nama'].'</td>
            <td>'.$data['nis'].'</td>
            <td>'.$data['kelas'].'</td>
            <td>'.$data['tel_inst'].'</td>
            </tr>
            '; 
            $no++;
        }
    }
    ?>
    </tbody>
		</table><br><br><br><br><br><br><br><br>
		<!--<table width="700">
			<tr style="float:left;">
				<td width="700">Diterima / Ditolak *)<br>
				Tanggal : …………………………
			<br><br><br><br><br><br><br>
		<span>_________________________</span><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanda tangan, Cap <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;& Penerima Perusahaan
</td></tr><tr style="float:right;">
				<td>Bandung, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2023<br>
				A.n. Kepala SMK IGASAR PINDAD<br>Wakasek Hubin/Koord. Prakerin
			<br><img src="../asset/gambar/ttd.png" width="100" height="80"><br>
		<span style="text-decoration: underline; font-weight:bold;">Drs. ADENG J. LESMANA</span>
		</td></tr></table>-->
		</center>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output("".$nama_dokumen.".pdf" ,'D');
$db1->close();
?>