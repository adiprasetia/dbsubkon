<?php
include 'koneksi.php';
?>
<!--ini Code yang sudah bisa jalan untuk memasukkan data, termasuk file koneksi.php-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data SUBKON</title>
	<link rel="stylesheet" type="text/css" href="../gaya.css">
</head>

<BODY>
	<div class="header">
		Input Data Subkon
	</div>

	<div class="judul">
		Silahkan Isi Data Subkon/Mandor
	</div>

	<div class="content">
	<form action="input.php" method="POST"> <!-- Action adalah tempat file proses input berada -->
	<table align="center">
		<tr>
			<td>Nama</td><td>:</td><td><input type="text" name="nama" placeholder="Max 25 character"></td>
		</tr>
		<tr>
			<td>ID</td><td>:</td><td><input type="text" name="ID" placeholder="Max 2 character"></td>
		</tr>
		<tr>
			<td>Bidang Pekerjaan</td><td>:</td>
			<td>
			<select name="bidangpek">
				<option>Bidang</option>
				<option>Sipil</option>
				<option>Baja</option>
				<option>Cat</option>	
			</select>
			</td>
		</tr>
		<tr>
			<td>Asal</td><td>:</td><td><input type="text" name="asal" placeholder="Max 25 character"></td>
		</tr>
		<tr>
			<td>Jumlah Pekerja</td><td>:</td><td><input type="text" name="jumlah" placeholder="Max 25 character"></td>
		</tr>
		
		<tr>
			<td>&nbsp</td><td>&nbsp</td><td><input name="btnsimpan" type="submit" value="Simpan">&nbsp<input type="reset" value="Hapus"></td>
		</tr>
	</table>
	</form>

	<?php 
	if(isset($_POST['btnsimpan'])){

		$txtnama = $_POST['nama'];
		$ID = $_POST['ID'];
		$txtbidang = $_POST['bidangpek'];
		$txtasal = $_POST['asal'];
		$txtjumlah = $_POST['jumlah'];

		$sql = "INSERT INTO tbl_subkon (nama,ID, bidangpek, asal, jumlah)
		VALUES ('$txtnama','$ID', '$txtbidang', '$txtasal', '$txtjumlah')";

		mysqli_query($konek,$sql); /*mengkonekkan ke database kemudian meng-insert data untuk disimpan*/

		header("location:tampildata.php?pesan=input"); /*mengalihkan halaman ke tampmildata.php disertai pesan "Data berhasil dismipan", rincian pesan ada di file tampmildata.php*/

	}

	?>

	</div>

	<div class="areatombol">
	<a class="tombol" href="tampildata.php">Lihat Semua Data</a>
	
	</div>


	
	<div class="footer">
		Copyright &copy; 2016
	</div>

</BODY>

</html>