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

$nama_dokumen='Surat Prakerin';
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Surat Prakerin</title>
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
      <td><img src="../asset/gambar/kop.png" width="700" height="100"></td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
		</table>
		<table>
		<tr class="text2">
				<td>Nomor</td>
				<td width="572">:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/SMKIGASAR/ V /2023</td>
			</tr>
			<tr>
				<td>Lampiran</td>
				<td width="564">: 1 (satu) Lembar</td>
			</tr>
			<tr>
				<td>Hal</td>
				<td width="564">: <span  style="text-decoration: underline; font-weight:bold;">Permohonan Praktek Kerja Industri (PRAKERIN)</span></td>
			</tr>
		</table>
		<table width="625">
			<tr>
		       <td>
			       Kpd Yth.<br>Bapak / Ibu Pimpinan <br><?php
				if(isset($_POST['submit']))
				{
				 echo $_POST['nama_inst'];
				}
				?><br><?php
				if(isset($_POST['submit']))
				{
				 echo $_POST['alamat_inst'];
				}
				?>
			   </td></tr><tr>
			   <td>di-</td></tr><tr>
			   <td><u>TEMPAT<u></td>
		    </tr>
		    </tr>
		</table>
		<table width="700">
			<tr>
		       <td>
			   <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Praktek Kerja Industri ( PRAKERIN ) adalah satu kegiatan ekstrakurikuler yang di ikuti oleh Siswa / Siswi SMK IGASAR PINDAD Bandung dan di laksanakan secara individual 
				sebagai wahana untuk lebih memantapkan hasil belajar dan sekaligus memberikan kesempatan mendalami dan 
				mengahayati kemapuan hasil tersebut dalam situasi dan kondisi kerja yang sesuai.</p><br>
				<p>Adapun landasan pelaksanaan PRAKERIN adalah sebagai berikut:<br>
1.	PP. Nomor : 39 Tahun 1992 tentang peran serta masyarakat dalam peneyelenggaraan pendidikan nasional Pasal 4 &nbsp;&nbsp;&nbsp;butir 8 secara tegas menyebutkan bahwa bentuk dan sifat peran serta masyarakat antara lain: pemberian &nbsp;&nbsp;&nbsp;&nbsp;kesempatan untuk magang dan / latihan kerja.
<br>2.	Keputusan Menteri Pendidikan dan Kebudayaan Nomor:0490/U/1992 Pasal 33
<br>3.	Butir 6 menyatakan bahwa kerjasama SMK dengan dengan dunia usaha antara lain meliputi kegiatan PRAKERIN / &nbsp;&nbsp;&nbsp;&nbsp;Magang.
<br>4.	Keputusan Menteri Pendidikan dan Kebudayaan Nomor:080-//1993 tanggal 27 Februari 1993 tentang Kurikulum &nbsp;&nbsp;&nbsp;&nbsp;Sekolah Menengah Kejuruan ( KUR SMK ).
</p><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Untuk melaksanakan PRAKERIN tersebut diatas, kami mohon dapatlah kiranya memberikan kesempatan kepada siswa/siswi kami untuk melaksanakan PRAKERIN di Instansi yang Bapak/Ibu Pimpin.</p>
<br><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adapun siswa/siswi yang akan melaksanakan PRAKERIN berjumlah (  ) orang terdiri dari Jurusan Teknik Kendaraan Ringan (  ) orang, Jurusan Teknik Pemesinan (  ) orang, Jurusan Teknik Komputer & Jaringan ( 4 ) orang, Jurusan Rekayasa Perangkat Lunak (  )  orang dan Jurusan Teknik Sepeda Motor (  ) orang ( daftar terlampir ) dan waktunya telah disepakati oleh sekolah dan Industri / Instansi mulai <span style="text-decoration: underline; font-weight:bold;"> dari 
	Bulan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; s.d     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                      2023 (selama 3 Bulan).</span></p>
	<br><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Permohonan kami dan atas perhatian serta bantuan yang diberikan, kami ucapkan terima kasih.</p>
</td></tr>
		</table>
		<table width="700">
			<tr>
				<td style="text-align:right;">A.n. Kepala SMK IGASAR PINDAD<br>
				&nbsp;&nbsp;&nbsp;Wakasek Hubin/Koord. Prakerin
			<br><br><br><br><br><br>
		<span style="text-decoration: underline; font-weight:bold;">Yanna Muliana, ST</span></td></tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</table>
		
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