<?php
include 'koneksi.php';
?>
<!--ini Code yang sudah bisa jalan untuk memasukkan data, termasuk file koneksi.php-->
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="../gaya.css">
	
</head>

<BODY>
	<div class="header">
		Edit Data Subkon
	</div>

	<div class="content">
	<center>Silahkan Edit Data Subkon/Mandor</center><br>

	<?php
	$nomor = $_GET['nomor'];
	$query = mysqli_query ($konek, "SELECT * FROM tbl_subkon WHERE nomor='$nomor'");

	while ($data = mysqli_fetch_array($query)){
	?>

	<form action="update.php" method="POST"> <!-- Action adalah tempat file proses input berada -->
	<table align="center">
		<tr>
			<td>Nama</td><td>:</td><td>
				<input type="hidden" name="nomor" value="<?php echo $data['nomor'] ?>">
				<input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
		</tr>
		<tr>
			<td>ID</td><td>:</td><td><input type="text" name="ID" value="<?php echo $data['ID'] ?>"></td>
		</tr>
		<tr>
			<td>Bidang Pekerjaan</td><td>:</td>
			<td>
			<select name="bidangpek" value="<?php echo $data['bidangpek'] ?>">
				<option>Bidang</option>
				<option>Sipil</option>
				<option>Baja</option>
				<option>Cat</option>	
			</select>
			</td>
		</tr>
		<tr>
			<td>Asal</td><td>:</td><td><input type="text" name="asal" value="<?php echo $data['asal'] ?>"></td>
		</tr>
		<tr>
			<td>Jumlah Pekerja</td><td>:</td><td><input type="text" name="jumlah" value="<?php echo $data['jumlah'] ?>"></td>
		</tr>
		
		<tr>
			<td>&nbsp</td><td>&nbsp</td><td><input name="btnsimpan" type="submit" value="Simpan">&nbsp<input type="reset" value="Hapus"></td>
		</tr>
	</table>
	</form>

	<?php }	?>
	
	</div>

	<div class="areatombol">
	<a class="tombol" href="tampildata.php">Lihat Semua Data</a>
	</div>
	

	<div class="footer">
		Copyright &copy; 2016
	</div>

</BODY>

</html>