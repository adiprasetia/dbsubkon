<?php
include 'koneksi.php';

session_start();
if(isset($_SESSION['nama']))
{

}
else
{
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Tabel Data Subkon</title>
<link rel="stylesheet" type="text/css" href="gaya.css">
<style type="text/css">
	table, td, th{
		border:1px solid black;
		border-collapse: collapse;
	}
</style>
</head>
<body>
	<div class="header">
		Data Subkon/ Mandor SWG Sipil
		<div class="nama">Selamat datang <?php echo $_SESSION['nama'] ?></div>
	</div>

	<div class='pesan'>
	<?php
	/*bagian ini berhubungan dengan isi pesan yang dikirim oleh header pada file update, edit, dan input*/
			if(isset($_GET['pesan'])){
				$pesan = $_GET['pesan']; /*isi pesan masuk dalam variable $pesan, (menangkap isi pesan)*/
				if($pesan == "input"){
					print "DATA BERHASIL DISIMPAN";
				}elseif ($pesan == "update"){
					print "DATA BERHASIL DIUPDATE";
				}elseif ($pesan =="hapus") {
					print "DATA BERHASIL DIHAPUS";
				}
			}
	?>	
	
	</div>

	<div class="areatombol2">
		
		<a class="tombol" href="input.php">Tambah Data Baru</a>
	</div>

	<div class="judul">
		<h3>TABEL DATA SUBKON</h3>
	</div>

	<div class="content2">
		<table align="center">

			<tr>
				<!--<th width="25" align="center">NO</th>-->
				<th width="200" align="center">Nama</th>
				<th width="25" align="center">ID</th>
				<th width="100" align="center">Bidang Pekerjaan</th>
				<th width="100" align="center">Asal</th>
				<th width="100" align="center">Jumlah Pekerja</th>
				<th width="100" align="center">Opsi</th>
			</tr>

			<?php
				$query=mysqli_query($konek, "SELECT * FROM tbl_subkon");
				while ($data = mysqli_fetch_array($query)){

			?>

			<tr>
				<!--<td align="center">?php echo $data['nomor'];?></td>-->
				<td ><?php echo $data['nama'];?></td>
				<td align="center"><?php echo $data['ID'];?></td>
				<td align="center"><?php echo $data['bidangpek'];?></td>
				<td align="center"><?php echo $data['asal'];?></td>
				<td align="center"><?php echo $data['jumlah'];?></td>
				<td align="center">
					<a class="edit" href="edit.php?nomor=<?php echo $data ['nomor']; ?>">Edit</a>
					<a class="hapus" href="hapus.php?nomor=<?php echo $data ['nomor']; ?>">Hapus</a>
				</td>
			</tr>

			<?php } ?>
		</table>
	</div>

	<div class="footer">
		Copyright &copy; 2016
	</div>

</body>

</html>